<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Tag;
use App\Post;
use App\Category;
use Carbon\Carbon;
use App\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('pages.admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('pages.admin.posts.create', ['tags' => $tags, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'title.required' => 'Name is required.',
            'categories.required' => 'Category is required.',
            'tags.required' => 'Tag is required.',
            'body.required' => 'Body is required.',
            'image.image' => 'File should be an Image.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->input('title'), '_');
        $currentDate = Carbon::now()->toDateString();

        if (isset($image)) {
            $imageName = $currentDate . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $request->image->move(('assets/images/posts'), $imageName);
        }

        if (isset($request->status)) {
            $status = true;
        } else {
            $status = false;
        }

        $post = new Post();

        $post->user_id = Auth::id();
        $post->title = $request->input('title');
        $post->slug = $slug;
        $post->image = $imageName;
        $post->body = $request->input('body');
        $post->status = $status;
        $post->is_approved = true;
        $post->created_at = date('Y-m-d');
        $result = $post->save();
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        if ($result) {
            Toastr::success('New post created.', 'success');
            return redirect()->route('admin.post.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.admin.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('pages.admin.posts.edit', ['post' => $post, 'tags' => $tags, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'title.required' => 'Name is required.',
            'categories.required' => 'Category is required.',
            'tags.required' => 'Tag is required.',
            'body.required' => 'Body is required.',
            'image.image' => 'File should be an Image.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);


        if ($request->has('title')) {
            $post->title = $request->title;
            $post->slug = Str::slug($request->title, '_');
        }
        if ($request->has('image')) {
            $image = $request->file('image');
            $databaseImage = explode('.', $post->image);
            $imageName = $databaseImage[0];

            $NewImageName = $imageName . '.' . $image->getClientOriginalExtension();
            $request->image->move(('assets/images/posts'), $NewImageName);
        }
        if ($request->has('body')) {
            $post->body = $request->body;
        }

        if ($request->has('status')) {
            $post->status = true;
        } else {
            $post->status = false;
        }

        if ($request->has('categories')) {
            $post->categories()->sync($request->categories);
        }

        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }

        $post->updated_at = date('Y-m-d');

        $result = $post->save();

        if ($result) {
            Toastr::success('Post has updated.', 'success');
            return redirect()->route('admin.post.show', $post->id);
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $imagePath = 'assets/images/posts/' . $post->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $post->categories()->detach();
        $post->tags()->detach();

        $result = $post->delete();

        if ($result) {
            Toastr::success('Post has deleted successfully.', 'success');
            return redirect()->route('admin.post.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }


    public function publication(Request $request)
    {
        $this->validate($request, [
            'is_approved' => 'required',
        ], [
            'is_approved.required' => 'Desicion is required.'
        ]);

        $id = $request->input('post_id');
        if ($request->input('is_approved') == 'approved') {
            $approved = 1;
        } else {
            $approved = 2;
        }

        $data = array(
            'is_approved' => $approved
        );

        $result = Post::where('id', $id)->update($data);

        if ($result) {
            $publication = new Publication();
            $publication->post_id = $id;
            $publication->user_id = Auth::id();
            $publication->status = $request->input('is_approved');
            $publication->recommendation = $request->input('recommendation');
            $publication->created_at = date('Y-m-d');
            $savePublication = $publication->save();

            if ($savePublication) {
                Toastr::success('Approval has updated.', 'success');
                return redirect()->back();
            } else {
                Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                return redirect()->back();
            }
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
