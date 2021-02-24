<?php

namespace App\Http\Controllers\Admin\Product;

use App\Product;
use App\ProductGallery;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('product_sub_categories', 'product_category')->orderBy('id', 'DESC')->get();
        return view('pages.admin.products.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCategories = ProductCategory::all();
        $productSubCategories = ProductSubCategory::all();
        return view('pages.admin.products.product.create', ['productCategories' => $productCategories, 'productSubCategories' => $productSubCategories]);
    }

    public function subcategory_search($id)
    {
        $subCategories = ProductSubCategory::where('product_category_id', $id)->get();
        return response()->json(['subCategories' => $subCategories], 200);
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
            'name' => 'required',
            'category' => 'required'
        ], [
            'name.required' => 'Product name field is blank.',
            'category.required' => "Category is required"
        ]);

        $lastPhotoId = Product::select('id')->orderBy('id', 'DESC')->first();

        if ($lastPhotoId != null) {
            $newPhotoId = $lastPhotoId->id + 1;
        } else {
            $newPhotoId = 1;
        }


        // Code for Insert featured photo
        if ($request->has('image')) {

            $image = $request->file('image');

            $newImageName = "product_featured_" . $newPhotoId . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'storage/images/product-featured';
            $path = $request->file('image')->storeAs($destinationPath, $newImageName);
        }

        $product = new Product();

        if ($request->has('name')) {
            $product->name = $request->input('name');
        }

        if ($request->has('category')) {
            $product->product_category_id = $request->input('category');
        }

        if ($request->has('description')) {
            $product->description = $request->input('description');
        }

        if ($request->has('size')) {
            $product->size = $request->input('size');
        }

        if ($request->has('price')) {
            $product->price = $request->input('price');
        }

        if ($request->has('unit')) {
            $product->unit = $request->input('unit');
        }

        if ($request->has('available')) {
            $product->is_available = $request->input('available');
        }

        if ($request->has('image')) {
            $product->featured_image = $newImageName;
        }

        $product->created_at = date('Y-m-d');

        $created = $product->save();

        if ($created) {
            // Code for add sub category for project
            $product->product_sub_categories()->attach($request->sub_categories);

            // Code for Insert product gallery image
            if (!empty($request->support_images)) {

                $lastImageId = ProductGallery::select('id')->orderBy('id', 'DESC')->first();

                $i = 0;
                foreach ($request->file('support_images') as $image) {
                    if ($lastImageId != null) {
                        $imageId = $lastImageId->id + $i + 1;
                    } else {
                        $imageId = $i + 1;
                    }
                    // Code for store Profile gallery image 
                    $newImageName = "product_gal_img_" . $imageId . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'public/images/product-gallery';
                    $path = $image->storeAs($destinationPath, $newImageName);

                    $galleryInfo = NULL;
                    $galleryInfo = array(
                        'product_id' => $product->id,
                        'name' => $newImageName,
                        'created_at' => date('Y-m-d')
                    );
                    ProductGallery::create($galleryInfo);
                    $i++;
                }
            }
            Toastr::success('New product details saved successfully.', 'success');
            return redirect()->route('admin.product.show', $product->id);
        } else {
            Toastr::error('W00ps! Something went wrong. Try again.', 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('product_category', 'product_sub_categories', 'product_galleries')->findOrFail($id);
        return view('pages.admin.products.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
