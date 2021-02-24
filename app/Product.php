<?php

namespace App;

use App\ProductGallery;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'size',
        'price',
        'unit',
        'is_available',
        'featured_image',
        'created_at',
        'updated_at'
    ];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function product_sub_categories()
    {
        return $this->belongsToMany(ProductSubCategory::class);
    }

    public function product_galleries()
    {
        return $this->hasMany(ProductGallery::class);
    }
}
