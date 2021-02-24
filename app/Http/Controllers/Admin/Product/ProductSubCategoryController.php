<?php

namespace App\Http\Controllers\Admin\Product;

use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productSubCategories = ProductSubCategory::with('product_category')->latest()->get();
        $mainCategories = ProductCategory::all();
        return view('pages.admin.products.subcategory.index', ['mainCategories' => $mainCategories, 'productSubCategories' => $productSubCategories]);
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
            'name' => 'required | unique:product_sub_categories',
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This category name is already exists.',
        ]);

        $slug = Str::slug($request->input('name'), '_');

        $data = array(
            'product_category_id' => $request->input('category'),
            'name' => $request->input('name'),
            'slug' => $slug,
            'created_at' => date('Y-m-d')
        );

        $result = ProductSubCategory::create($data);

        if ($result) {
            Toastr::success('New Product Sub Category name saved.', 'success');
            return redirect()->route('admin.product.sub.category.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }

    public function search($id)
    {
        $productSubCategory = ProductSubCategory::with('product_category')->findOrFail($id);
        $productCategories = ProductCategory::all();
        return response()->json(['productSubCategory' => $productSubCategory, 'productCategories' => $productCategories], 200);
    }

    public function update(Request $request)
    {
        $id = $request->input('catId');
        $productSubCategory = ProductSubCategory::with('product_category')->findOrFail($id);

        $this->validate($request, [
            'name' => 'required | unique:product_sub_categories,name,' . $productSubCategory->id
        ], [
            'name.required' => 'Name is required.',
            'name.unique' => 'This category name is already exists.'
        ]);

        if ($request->has('name')) {
            $productSubCategory->name = $request->input('name');
            $productSubCategory->slug = Str::slug($request->input('name'), '_');
        }

        $productSubCategory->updated_at = date('Y-m-d');

        $updated = $productSubCategory->save();

        if ($updated) {
            Toastr::success('Product sub category info has updated successfully.', 'success');
            return redirect()->route('admin.product.sub.category.index');
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
        $category = ProductSubCategory::findOrFail($id);

        $result = $category->delete();

        if ($result) {
            Toastr::success('Product Sub Category has deleted.', 'success');
            return redirect()->route('admin.product.sub.category.index');
        } else {
            Toastr::warning('W00ps! Something went wrong. Try again.', 'warning');
            return redirect()->back();
        }
    }
}
