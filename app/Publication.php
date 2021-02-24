<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Publication extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'post_id', 'user_id', 'status', 'recommendation','created_at', 'updated_at'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function post(){
        return $this->hasOne(Post::class);
    }
}
