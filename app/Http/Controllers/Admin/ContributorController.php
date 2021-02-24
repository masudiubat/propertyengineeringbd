<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Post;
use App\User;
use App\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = User::orderBy('id', 'DESC')->get();
        return view('pages.admin.contributor.index', ['contributors' => $contributors]);
    }

    public function contributor_posts($id)
    {
        $posts = Post::latest()->where('user_id', $id)->get();
        return view('pages.admin.posts.index', ['posts' => $posts]);
    }

    public function contributor_comments($id)
    {
        $comments = Comment::where('user_id', $id)->orderBy('id', 'DESC')->paginate(5);
        return view('pages.admin.comment.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contributor_edit($id)
    {
        $contributor = User::findOrFail($id);
        return response()->json(['contributor' => $contributor], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'mobile' => 'required|unique:users,mobile,' . $user->id
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email field should contain an valid email',
            'email.unique' => 'This email address already used.',
            'mobile.required' => 'Mobile Number is required.',
            'mobile.unique' => 'Mobile number already exists.'
        ]);

        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'updated_at' => date('Y-m-d')
        );

        $result = User::where('id', $id)->update($data);

        if ($result) {
            Toastr::success('Profile has successfully updated.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    public function change_avater($id)
    {
        $avater = User::findOrFail($id);
        return response()->json(['avater' => $avater], 200);
    }

    public function avater_change(Request $request)
    {

        $id = $request->input('id');
        $user = User::findOrFail($id);

        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg',
        ], [
            'image.image' => 'File should be an Image.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.'
        ]);

        $slugName = Str::slug($user->name, '_');
        // get form image within variable
        $image = $request->file('image');

        if (isset($image)) {
            $imageName = $slugName . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $request->image->move(('assets/images/users'), $imageName);
            $data = array(
                'image' => $imageName,
                'updated_at' => date('Y-m-d')
            );

            $result = User::where('id', $id)->update($data);
            if ($result) {
                Toastr::success('Avater successfully updated.', 'success');
                return redirect()->back();
            } else {
                Toastr::warning('W00ps! Something went wrong. Operation failed.', 'warning');
                return redirect()->back();
            }
        } else {
            Toastr::warning('W00ps! Something went wrong. No image found.', 'warning');
            return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contributor = User::findOrFail($id);

        if ($contributor->image) {
            Storage::delete('assets/images/users/' . $contributor->image);
        }

        if ($contributor->posts) {
            foreach ($contributor->posts as $post) {
                if ($post->comments) {
                    foreach ($post->comments as $comment) {
                        $comment->delete();
                    }
                }
                $post->categories()->detach();
                $post->tags()->detach();
                $post->delete();
            }
        }

        if ($contributor->comments) {
            foreach ($contributor->comments as $comment) {
                $comment->delete();
            }
        }

        $result = $contributor->delete();

        if ($result) {
            Toastr::success('User has deleted successfully.', 'success');
            return redirect()->back();
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
