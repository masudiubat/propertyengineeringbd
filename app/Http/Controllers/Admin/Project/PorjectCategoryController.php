<?php

namespace App\Http\Controllers\Admin\Project;

use App\ProjectCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class PorjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectCategories = ProjectCategory::latest()->get();

        return view('pages.admin.projects.category.index', ['projectCategories' => $projectCategories]);
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
            'name' => 'required | unique:project_categories',
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
            $imageName = 'project_' . $slug . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $request->image->move(('storage/images/project-category'), $imageName);

            $data = array(
                'name' => $request->input('name'),
                'slug' => $slug,
                'image' => $imageName,
                'created_at' => date('Y-m-d')
            );

            $result = ProjectCategory::create($data);

            if ($result) {
                Toastr::success('New Category name saved.', 'success');
                return redirect()->route('admin.project.category.index');
            } else {
                Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                return redirect()->back();
            }
        }
    }

    public function search($id)
    {
        $projectCategory = ProjectCategory::findOrFail($id);
        return response()->json(['projectCategory' => $projectCategory], 200);
    }

    public function update(Request $request)
    {
        $id = $request->input('catId');
        $projectCategory = ProjectCategory::findOrFail($id);

        $this->validate($request, [
            'name' => 'required | unique:project_categories,name,' . $projectCategory->id,
            'image' => 'mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This category name is already exists.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);

        if ($request->has('image')) {
            $image = $request->file('image');
            $databaseImage = explode('.', $projectCategory->image);
            $imageName = $databaseImage[0];

            $NewImageName = $imageName . '.' . $image->getClientOriginalExtension();
            $request->image->move(('storage/images/project-category'), $NewImageName);
        }

        if ($request->has('name')) {
            $projectCategory->name = $request->input('name');
            $projectCategory->slug = Str::slug($request->input('name'), '_');
        }

        if ($request->has('image')) {
            $projectCategory->image = $NewImageName;
        }

        $projectCategory->updated_at = date('Y-m-d');

        $updated = $projectCategory->save();

        if ($updated) {
            Toastr::success('Project category info has updated successfully.', 'success');
            return redirect()->route('admin.project.category.index');
        } else {
            Toastr::error('W00ps! Something went wrong. Try again.', 'error');
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
        $category = ProjectCategory::findOrFail($id);

        // Delete category Photo
        if ($category->image != null) {
            if (file_exists('storage/images/project-category/' . $category->image)) {
                unlink('storage/images/project-category/' . $category->image);
            }
        }

        $result = $category->delete();

        if ($result) {
            Toastr::success('Project Category has deleted.', 'success');
            return redirect()->route('admin.project.category.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
