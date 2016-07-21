<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['name','alias','intro','content','image','keyword','description','user_id','cate_id'];

    //public $timestamps = false;



    public function cate()
    {
    	return $this->belongTo('App\Cate');//1 san pham thuoc 1 cate
    }
    public function user()
    {
    	return $this->belongTo('App\User');//1 san pham thuoc 1 cate
    }
}