<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    // allow fields to be mass populated in the db
    protected $fillable = [
        'title','content','category_id','featured','slug'
    ];

    public function getFeaturedAttributes($featured){
       return asset($featured);
    }

    protected $dates = ['deleted_at'];
    // category relationship method
    public function category() {
        return $this->belongsTo('App\Category');
    }

    // method defining many to many relationships with posts and tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
