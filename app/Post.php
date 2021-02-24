<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Tag;
use App\Comment;
use App\Publication;

class Post extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'slug', 'image', 'body', 'view_count', 'status', 'is_approved', 'created_at','updated_at',
    ];

    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function publication(){
        return $this->hasOne(Publication::class);
    }

    public function scopeApproved($query){
        return $query->where('is_approved', 1);
    }

    public function scopePublished($query){
        return $query->where('status', 1);
    }
}
