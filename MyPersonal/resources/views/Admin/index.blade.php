@extends('layouts.Admin-Home')
@section('title')
	Admin
@endsection
@section('container')
<div class="row">
  	<div class="container itemhome">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-9 m-auto">
                    <div class="card">
                        <div class="card-header">Home Page</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @foreach($homes as $home)
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Image</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">About</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="about" value="{{$home->about}}">
                                            </div>
                                        </div>
                                        <h5 class="col-sm-11 m-auto">My Service</h5>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Web Development</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="web" value="{{$home->web}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Brand Identity</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="brand" value="{{$home->brand}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Fast Delivery</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="delivery" value="{{$home->delivery}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 m-auto">
                                                <a href="{{route('admin.homeedit',[$home->id])}}" class="btn btn-warning">Edit</a>
                                                @endforeach
                                            </div>
                                            <div class="col-sm-3 ml-auto">
                                                <input type="submit" name="" class="btn btn-success" value="Submit">
                                            </div>
                                        </div>
                                        @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            @if(session('message'))
                            <div class="alert alert-success m-auto">
                                {{session('message')}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection