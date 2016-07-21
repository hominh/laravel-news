@extends('admin.master')
@section('content')

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
                        <form action="{!! route('admin.user.postAdd') !!}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="txtUsername" placeholder="Please Enter Username" value="{!! old('txtUsername') !!}" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Re password</label>
                                <input class="form-control" type="password" name="txtRePassword" placeholder="Please Enter Re Password" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="txtEmail" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="2" type="radio">Super admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoLevel" value="3" type="radio">Memeber
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
@endsection()