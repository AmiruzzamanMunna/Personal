@extends('layouts.Admin-Home')
@section('title')
	Admin About
@endsection
@section('container')
<div class="row">
    <div class="container itemhome">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-9 m-auto">
                    <div class="card">
                        <div class="card-header">About Page</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Image</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Heading</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="heading">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Heading Text</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="htext">
                                            </div>
                                        </div>
                                        <div class="row m-auto">
                                            <div class="col-sm-5">
                                                <input type="reset" name="" class="btn btn-danger" value="Reset">
                                            </div>
                                            @foreach($abouts as $about)
                                            <div class="col-sm-4">
                                                <a href="{{route('admin.aboutedit',[$about->id])}}" class="btn btn-warning">Edit</a>
                                            </div>
                                            @endforeach
                                             <div class="col-sm-">
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