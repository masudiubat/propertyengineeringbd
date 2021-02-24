<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Input;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('pages.admin.category.index', ['categories' => $categories]);
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
        $this->validate($request, [
            'name' => 'required | unique:categories',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This category name is already exists.',
            'image.image' => 'File should be an Image.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);

        // get form image within variable
        $image = $request->file('image');

        $slug = Str::slug($request->input('name'), '_');

        if (isset($image)) {
            $imageName = 'post_' . $slug . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $request->image->move(('assets/images/category'), $imageName);

            $data = array(
                'name' => $request->input('name'),
                'slug' => $slug,
                'image' => $imageName,
                'created_at' => date('Y-m-d')
            );

            $result = Category::create($data);

            if ($result) {
                Toastr::success('New Category name saved.', 'success');
                return redirect()->route('admin.category.index');
            } else {
                Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::delete('assets/images/category/' . $category->image);
        }

        $result = $category->delete();

        if ($result) {
            Toastr::success('Category has deleted.', 'success');
            return redirect()->route('admin.category.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
