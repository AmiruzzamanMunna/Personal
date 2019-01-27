@extends('layouts.User-Home')
@section('title')
	About
@endsection
@section('container')
<div class="container-fluid wrapabout">
	<div class="row m-auto wrapimg">
		@foreach($abouts as $about)
		<img class="img-fluid m-auto" src="{{asset('images/uploads')}}/{{$about->image}}" id="aboutimage">
		@endforeach
	</div>
	<div class="row aboutblog">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-sm-12 mr-auto">
					@foreach($abouts as $about)
				<h2 class="aboutheader">{{$about->heading}}</h2>
				<p class="aboutp">
					{{$about->htext}}
				</p>
				@endforeach
			</div>
			</div>
		</div>
	</div>
</div>
@endsection
