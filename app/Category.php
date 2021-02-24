<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
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

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
