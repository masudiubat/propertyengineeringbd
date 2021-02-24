<?php

namespace App\Http\Controllers\Admin\Product;

use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = ProductCategory::latest()->get();

        return view('pages.admin.products.category.index', ['productCategories' => $productCategories]);
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
            'name' => 'required | unique:product_categories',
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
            $imageName = 'product_' . $slug . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $request->image->move(('storage/images/product-category'), $imageName);

            $data = array(
                'name' => $request->input('name'),
                'slug' => $slug,
                'image' => $imageName,
                'created_at' => date('Y-m-d')
            );

            $result = ProductCategory::create($data);

            if ($result) {
                Toastr::success('New Product Category name saved.', 'success');
                return redirect()->route('admin.product.main.category.index');
            } else {
                Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
                return redirect()->back();
            }
        }
    }

    public function search($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        return response()->json(['productCategory' => $productCategory], 200);
    }

    public function update(Request $request)
    {
        $id = $request->input('catId');
        $productCategory = ProductCategory::findOrFail($id);

        $this->validate($request, [
            'name' => 'required | unique:product_categories,name,' . $productCategory->id,
            'image' => 'mimes:jpeg,png,jpg|max:2048',
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This category name is already exists.',
            'image.mimes' => 'File should be jpeg, png, jpg, gif, svg.',
            'image.max' => 'Maximum Image size is 2048'
        ]);

        if ($request->has('image')) {
            $image = $request->file('image');
            $databaseImage = explode('.', $productCategory->image);
            $imageName = $databaseImage[0];

            $NewImageName = $imageName . '.' . $image->getClientOriginalExtension();
            $request->image->move(('storage/images/product-category'), $NewImageName);
        }

        if ($request->has('name')) {
            $productCategory->name = $request->input('name');
            $productCategory->slug = Str::slug($request->input('name'), '_');
        }

        if ($request->has('image')) {
            $productCategory->image = $NewImageName;
        }

        $productCategory->updated_at = date('Y-m-d');

        $updated = $productCategory->save();

        if ($updated) {
            Toastr::success('Product category info has updated successfully.', 'success');
            return redirect()->route('admin.product.main.category.index');
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
        $category = ProductCategory::with('product_sub_categories')->findOrFail($id);

        // Delete Sub Categories belongs to category
        if ($category->product_sub_categories != null) {
            $subCategory = ProductSubCategory::where('product_category_id', $id)->get();
            $subCategory->each->delete();
        }

        // Delete category Photo
        if ($category->image != null) {
            if (file_exists('storage/images/product-category/' . $category->image)) {
                unlink('storage/images/product-category/' . $category->image);
            }
        }

        $result = $category->delete();

        if ($result) {
            Toastr::success('Product Category has deleted.', 'success');
            return redirect()->route('admin.product.main.category.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
