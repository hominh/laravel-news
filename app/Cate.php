<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';

    protected $fillable = ['name','alias','order','parent_id','keyword','description'];

    //public $timestamps = false;

    public function post()
    {
    	return $this->hasMany('App\Post'); //1 cate nhieu post
    }
}