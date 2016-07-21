<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller
{
    public function getAdd()
    {
        $parentCate = Cate::select('id','name','parent_id')->get()->toArray();
    	return view('admin.cate.add',compact('parentCate'));
    }

    public function getList()
    {
        $data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.cate.list',compact('data'));
    }

    public function getDelete($id)
    {
        //echo $id;
        $parent = Cate::where('parent_id',$id)->count();
        if($parent == 0) { //Khong Co danh muc con thi xoa
            $cate = Cate::find($id);
            $cate->delete();
            return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Delete success']);
        }
        else {
            echo "<script type='text/javascript'>
            alert('Khong xoa duoc');
            window.location = '";
            echo route('admin.cate.list');
            echo "'
            </script>";
        }
        
    }

    public function getEdit($id)
    {
        $data = Cate::findOrFail($id)->toArray();
        $parentCate = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate.edit',compact('parentCate','data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtCateName" => "required"],
            ["txtCateName.required" => "Ban phai nhap ten danh muc"] 
        );
        $cate = Cate::find($id);
        $cate->name = $request->txtCateName;
        $cate->alias = changeTitle($request->txtCateName);
        $cate->order = $request->txtOrder;
        $cate->parent_id = $request->category;
        $cate->keyword = $request->txtKeyword;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Edit Sucess']);
    }

    public function postAdd(CateRequest $request)
    {
    	//print_r($request->txtCateName);
    	$cate = new Cate;
    	$cate->name = $request->txtCateName;
    	$cate->alias = changeTitle($request->txtCateName);
    	$cate->order = $request->txtOrder;
    	$cate->parent_id = $request->category;
    	$cate->keyword = $request->txtKeyword;
    	$cate->description = $request->txtDescription;
        $cate->title = $request->txtTitle;
    	$cate->save();
    	return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Sucess']);
    }
}