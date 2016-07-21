<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\ProductRequest;
use App\Cate;
use App\Product;
use App\Product_image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Auth;
class PostController extends Controller
{

    public function getAdd()
    {
        //$parentCate = Cate::select('id','name','parent_id')->get()->toArray();
    	//return view('admin.cate.add',compact('parentCate'));
        $cate = Cate::select('name','id','parent_id')->get()->toArray();
        return view('admin.product.add',compact('cate'));
    }

    public function postAdd(ProductRequest $request)
    {
        //Dang bi loi tmp doan add san pham...
        //Comment vao se khong loi nua

        $file_image = $request->file('fileimages')->getClientOriginalName();
        $product = new Product();
        $product->name = $request->txtProductName;
        $product->alias = changeTitle($request->txtProductName);
        $product->price = $request->txtPrice;
        $product->intro = $request->txtIntro;
        $product->content = $request->txtContent;
        $product->image = $file_image;
        $product->keyword = $request->txtKeyword;
        $product->description = $request->txtDescription;
        $product->user_id = Auth::user()->id;
        $product->cate_id = $request->category;
        $request->file('fileimages')->move('resources/upload/',$file_image);
        //dd($request->all());
        $product->save();
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Add Post Sucess']);
    }

    public function getList()
    {
        //$data = Product::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
        $data = DB::table('post')
                    ->leftJoin('cates','post.cate_id','=','cates.id')
                    ->select('post.id','post.name','post.created_at','cates.name as catename')->get();
        $data=array_map(function($item){
            return (array) $item;
        },$data);
        //dd($data);
    	return view('admin.product.list',compact('data'));
        
    }

    public function getDelete($id)
    {
        $product_detail = Product::find($id)->pimages->toArray();
        foreach ($product_detail as $value) {
            File::delete('resources/upload/detail/'.$value["image"]);
        }
        $product = Product::find($id);
        File::delete('resources/upload/'.$product->image);
        $product->delete($id);
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Delete Product Sucess']);
        
    }

    public function getEdit($id)
    {
        $data = Product::findOrFail($id)->toArray();
        $cate = Cate::select('id','name','parent_id')->get()->toArray();
        $product_images = Product::find($id)->pimages;
        return view('admin.product.edit',compact('cate','data','id','product_images'));
    }

    public function postEdit($id,Request $request)
    {
        //Kiem tra image chinh
        $product = Product::findOrFail($id);
        $imgCurrent = 'resources/upload/'.Request::input('imgcurrent');
        
        if(Request::file('fileimages') == "") {

        }
        else {
            $newFileImage = Request::file('fileimages')->getClientOriginalName();
            
            $product->image = $newFileImage;
            Request::file('fileimages')->move('resources/upload/',$newFileImage);
            if(File::exists($imgCurrent)) {
                File::delete($imgCurrent);
            }
        }


        //Kiem tra image detail
        if(Request::file('fEditDetail') == "") {
            echo "Khong co hinh detail";
        }
        else {
            
            foreach (Request::file('fEditDetail') as $file) {
                $productImages = new Product_image();
                if(isset($file)) {
                    $productImages->image = $file->getClientOriginalName();
                    $productImages->product_id = $id;
                    $file->move('resources/upload/detail/',$file->getClientOriginalName());
                    $productImages->save();
                }
            }
            
        }

       
        $product->name = Request::input('txtProductName');
        $product->alias = changeTitle(Request::input('txtProductName'));
        $product->price = Request::input('txtPrice');
        $product->keyword = Request::input('txtKeyword');
        $product->description =Request::input('txtDescription');
        $product->intro = Request::input('txtIntro');
        $product->content = Request::input('txtContent');
        $product->user_id = Auth::user()->id;
        $product->cate_id = Request::input('category');
        $product->save();
        return redirect()->route('admin.product.list')->with(['flash_level'=>'success','flash_message'=>'Edit Sucess']);
    }

    public function getDelImg($id)
    {
        if(Request::ajax()) {
            $idImage = (int)Request::get('idHinh');
            $imageDetail = Product_image::find($idImage);
            if(!empty($imageDetail)) {
                $img = 'resources/upload/detail/'.$imageDetail->image;
                if(File::exists($img)) {
                    File::delete($img);
                }
                $imageDetail->delete();
            }
            return "ok";
        }
    }
}
