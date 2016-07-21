<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = DB::table('products')->select('id','name','price','alias','image')->orderBy('id','DESC')->skip(0)->take(4)->get();
        
        
        
        $view = View::make('frontend.pages.home');
        
        return $view;
    }

    /*public function category($cate_id)
    {

        $product_cate = DB::table('products')->select('id','name','image','price','alias','cate_id')->where('cate_id',$cate_id)->get();
        $cate = DB::table('cates')->select('parent_id','description')->where('id',$product_cate[0]->cate_id)->first();
        
        $cates  = DB::table('cates')->select('*')->where('id',$cate_id)->first();
        
        $menu_cate = DB::table('cates')->select('*')->where('parent_id',$cate->parent_id)->get();
        $lastest_products = DB::table('products')
        ->join('cates', 'products.cate_id', '=', 'cates.id')
        ->select('products.id','products.name as nameproduct','products.image','products.price','products.alias','products.cate_id','cates.name')
        ->orderBy('id','DESC')->take(3)->get();
        return view('frontend.pages.cate',compact('product_cate','menu_cate','lastest_products','cates'));
        
    } */  
}