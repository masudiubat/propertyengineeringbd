<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
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

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
