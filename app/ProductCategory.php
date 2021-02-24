<?php

namespace App;

use App\Product;
use App\ProductSubCategory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image', 'created_at', 'updated_at'
    ];

    public function product_sub_categories()
    {
        return $this->hasMany(ProductSubCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
