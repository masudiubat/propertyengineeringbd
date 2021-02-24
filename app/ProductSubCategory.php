<?php

namespace App;

use App\Product;
use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_category_id', 'name', 'slug', 'created_at', 'updated_at'
    ];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
