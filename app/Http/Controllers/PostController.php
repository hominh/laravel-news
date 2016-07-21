<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\PostRequest;
use App\Cate;
use App\Post;
use App\post_image;
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
        return view('admin.post.add',compact('cate'));
    }

    public function postAdd(PostRequest $request)
    {
        //Dang bi loi tmp doan add san pham...
        //Comment vao se khong loi nua

        $file_image = $request->file('fileimages')->getClientOriginalName();
        $post = new Post;
        $post->name = $request->txtPostName;
        $post->alias = changeTitle($request->txtPostName);
        $post->intro = $request->txtIntro;
        $post->content = $request->txtContent;
        $post->image = $file_image;
        $post->keyword = $request->txtKeyword;
        $post->description = $request->txtDescription;
        $post->user_id = 7;
        $post->cate_id = $request->category;
        $request->file('fileimages')->move('resources/upload/',$file_image);
        //dd($request->all());
        $post->save();
        return redirect()->route('admin.post.list')->with(['flash_level'=>'success','flash_message'=>'Add Post Sucess']);
    }

    public function getList()
    {
        //$data = post::select('id','name','price','cate_id','created_at')->orderBy('id','DESC')->get()->toArray();
        $data = DB::table('posts')
                    ->leftJoin('cates','posts.cate_id','=','cates.id')
                    ->select('posts.id','posts.name','posts.created_at','cates.name as catename')->get();
        $data=array_map(function($item){
            return (array) $item;
        },$data);
        //dd($data);
    	return view('admin.post.list',compact('data'));
        
    }

    public function getDelete($id)
    {
        $post_detail = post::find($id)->pimages->toArray();
        foreach ($post_detail as $value) {
            File::delete('resources/upload/detail/'.$value["image"]);
        }
        $post = post::find($id);
        File::delete('resources/upload/'.$post->image);
        $post->delete($id);
        return redirect()->route('admin.post.list')->with(['flash_level'=>'success','flash_message'=>'Delete post Sucess']);
        
    }

    public function getEdit($id)
    {
        $data = post::findOrFail($id)->toArray();
        $cate = Cate::select('id','name','parent_id')->get()->toArray();
        $post_images = post::find($id)->pimages;
        return view('admin.post.edit',compact('cate','data','id','post_images'));
    }

    public function postEdit($id,Request $request)
    {
        //Kiem tra image chinh
        $post = post::findOrFail($id);
        $imgCurrent = 'resources/upload/'.Request::input('imgcurrent');
        
        if(Request::file('fileimages') == "") {

        }
        else {
            $newFileImage = Request::file('fileimages')->getClientOriginalName();
            
            $post->image = $newFileImage;
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
                $postImages = new post_image();
                if(isset($file)) {
                    $postImages->image = $file->getClientOriginalName();
                    $postImages->post_id = $id;
                    $file->move('resources/upload/detail/',$file->getClientOriginalName());
                    $postImages->save();
                }
            }
            
        }

       
        $post->name = Request::input('txtpostName');
        $post->alias = changeTitle(Request::input('txtpostName'));
        $post->price = Request::input('txtPrice');
        $post->keyword = Request::input('txtKeyword');
        $post->description =Request::input('txtDescription');
        $post->intro = Request::input('txtIntro');
        $post->content = Request::input('txtContent');
        $post->user_id = Auth::user()->id;
        $post->cate_id = Request::input('category');
        $post->save();
        return redirect()->route('admin.post.list')->with(['flash_level'=>'success','flash_message'=>'Edit Sucess']);
    }

    public function getDelImg($id)
    {
        if(Request::ajax()) {
            $idImage = (int)Request::get('idHinh');
            $imageDetail = post_image::find($idImage);
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
