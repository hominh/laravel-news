@extends('admin.master')
@section('content')
<form action="{!! route('admin.post.postAdd') !!}" method="POST" enctype="multipart/form-data">
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
                                    
                                   <?php cate_parent($cate,0,"--",old('category')); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtPostName" placeholder="Please Enter Product Name" value="{!! old('txtPostName')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Intro</label>
                                <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro')!!}</textarea>
                                <script type="text/javascript">ckeditor("txtIntro")</script>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent')!!}</textarea>
                                <script type="text/javascript">ckeditor("txtContent")</script>
                            </div>
                            <div class="form-group">
                                <label>Keyword</label>
                                <input class="form-control" name="txtKeyword" placeholder="Please Enter keyword of product" value="{!! old('txtKeyword')!!}"  />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="txtDescription" placeholder="Please Enter Description of product" value="{!! old('txtDescription')!!}" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fileimages" value="{!! old('fileimages')!!}">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <label class="radio-inline">
                                    <input name="rdoType" value="0" type="radio">Normal
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoType" value="1" checked="" type="radio">Popular
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoType" value="2" type="radio">Top
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoType" value="3" type="radio">Hot
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoType" value="4" type="radio">Review
                                </label>
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