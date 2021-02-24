<?php

namespace App;

use App\ProjectGallery;
use App\ProjectCategory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'client_name',
        'client_mobile',
        'address',
        'area',
        'cost',
        'status',
        'start_date',
        'finish_date',
        'is_featured',
        'is_published',
        'featured_image',
        'created_at',
        'updated_at'
    ];

    public function project_galleries()
    {
        return $this->hasMany(ProjectGallery::class);
    }

    public function project_categories()
    {
        return $this->belongsToMany(ProjectCategory::class);
    }
}
