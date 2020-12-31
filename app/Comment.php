<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = [
    	'content', 'user_id', 'post_id',
    ];

    public function posts() {
    	return $this->belongTo('App\Post');
    }

    public function users() {
    	return $this->belongTo('App\User');
    }

}