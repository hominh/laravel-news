@extends('admin.master')
@section('content')
<style>
    .currentimage{
        width: 150px;
        height: auto;
    }
    .current_image_detail{
        width: 200px;
        height: auto;
        margin-bottom: 2px;
    }
    .icon_del{

        position: relative;
        top:-46px;
        left: 20px;
    }
    #insert {
        margin-top: 20px;
    }
</style>
<form action="" method="POST" enctype="multipart/form-data" name="frmEditProduct">
<div class="col-lg-7" style="padding-bottom:120px">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach

        </ul>
    </div>
@endif
                        
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    
                                   <?php cate_parent($cate,0,"--",$data["cate_id"]); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtPostName" placeholder="Please Enter Post Name" value="{!! old('txtPostName',isset($data) ? $data['name']: null) !!}" />
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Intro</label>
                                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro',isset($data) ? $data['intro']: null) !!}</textarea>
                                <script type="text/javascript">ckeditor("txtIntro")</script>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent',isset($data) ? $data['content']: null) !!}</textarea>
                                <script type="text/javascript">ckeditor("txtContent")</script>
                            </div>
                            <div class="form-group">
                                <label>Keyword</label>
                                <input class="form-control" name="txtKeyword" placeholder="Please Enter keyword of product" value="{!! old('txtKeyword',isset($data) ? $data['keyword']: null) !!}"  />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="txtDescription" placeholder="Please Enter Description of product" value="{!! old('txtDescription',isset($data) ? $data['description']: null) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Current Image</label>
                                <img src="{!! asset('resources/upload/'.$data['image'])  !!}" class="currentimage"/>
                                <input type="hidden" value="{!! $data['image'] !!}" name="imgcurrent" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="fileimages" value="{!! old('fileimages')!!}">
                            </div>
                            <!--<div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>!-->

                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <div class="col-md-1">
                        
                    </div>
                    
                  
<form>                
@endsection()