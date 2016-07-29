<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $parent_catedata = DB::table('cates')->where('parent_id',0)->get();
       
        $sub_catedata = DB::table('cates')->where('parent_id','<>',0)->get();
        $parent_catedata=array_map(function($item){
            return (array) $item;
        },$parent_catedata);

        $sub_catedata=array_map(function($item){
            return (array) $item;
        },$sub_catedata);
        view()->share('parent_catedata', $parent_catedata);
        view()->share('sub_catedata', $sub_catedata);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}