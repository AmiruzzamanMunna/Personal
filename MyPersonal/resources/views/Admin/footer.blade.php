@extends('layouts.Admin-Home')
@section('title')
	Admin Footer
@endsection
@section('container')
<div class="row">
	<div class="container itemhome">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-9 m-auto">
                    <div class="card">
                        <div class="card-header">Footer Page</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Facebook</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="facebook">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Instagram</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="instagram">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 m-auto">Twitter</label>
                                            <div class="col-md-6 m-auto">
                                                <input type="text" class="form-control" name="twitter">
                                            </div>
                                        </div>
                                        <div class="row ml-auto">
                                            <div class="col-sm-5 ml-auto">
                                                <input type="reset" name="" class="btn btn-danger" value="Reset">
                                            </div>
                                            @foreach($footers as $footer)
                                            <div class="col-sm-4 ml-auto">
                                                <a href="{{route('admin.footeredit',[$footer->id])}}" class="btn btn-warning">Edit</a>
                                            </div>
                                            @endforeach
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