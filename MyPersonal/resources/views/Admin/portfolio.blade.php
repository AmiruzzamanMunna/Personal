@extends('layouts.Admin-Home')
@section('title')
	Admin Portfolio
@endsection
@section('container')
<div class="row">
  	<div class="container itemhome">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-9 m-auto">
                    <div class="card">
                        <div class="card-header">Portfolio Page</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Portfolio</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="portfolio">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Heading 1</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="heading1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site1</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="file" class="form-control" name="site1image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site Link1</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="sitelink1">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-md-2 m-auto">Heading 2</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="heading2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site2</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="file" class="form-control" name="site2image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site Link2</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="sitelink2">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-md-2 m-auto">Heading 3</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="heading3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site3</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="file" class="form-control" name="site3image">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-md-2 m-auto">Site Link3</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="sitelink3">
                                            </div>
                                        </div>
                                        <div class="row m-auto">
                                                <div class="col-sm-5 ml-auto">
                                                    <input type="reset" name="" class="btn btn-danger" value="Reset">
                                                </div>
                                            @foreach($ports as $port)
                                                <div class="col-sm-3">
                                                    <a href="{{route('admin.adminPortfolioedit',[$port->id])}}" class="btn btn-warning">Edit</a>
                                                </div>
                                                @endforeach
                                            <div class="col-sm-3">
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