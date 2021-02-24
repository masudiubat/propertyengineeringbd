<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'name', 'created_at', 'updated_at'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
