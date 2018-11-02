<?php

use App\User;

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    //

    public $directory = "images/";

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [

    	'title', 'content', 'path'

    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function photos()
    {
    	return $this->morphMany('App\Photos', 'imageable');
    }

    public function tags()
    {
    	return $this->morphToMany('App\Tag', 'taggable');
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }
}