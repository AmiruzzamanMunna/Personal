@extends('layouts.User-Home')
@section('title')
	Home
@endsection
@section('container')
<div class="row containimage">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3 m-auto">
				@foreach($homes as $home)
				<img src="{{asset('images/uploads')}}/{{$home->image}}" class="rounded-circle imageelement">
				@endforeach
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-12 ml-auto">
				<h1 class="heading">Hi, I'm Munna</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 m-auto">
				<a href="" class="btn btn-primary">Download CV <i class="fas fa-arrow-circle-down"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row about">
		<div class="col-md-12">
			<h2 class="col-md-12 col-md-6">About</h2>
			<div class="row">
				<div class="col-sm-12">
					@forelse($homes as $home)
					<p class="col-md-12">
						{{$home->about}}
					</p>
					@empty
					@endforelse
				</div>
			</div>
		</div>
	</div>
	<div class="row service">
		<div class="col-md-12">
			<h2 class="col-md-12 col-md-6">My Service</h2>
			<div class="row pull-right">
				<div class="col-md-3 col-sm-6 serviceelement m-auto">
					<i class="fas fa-laptop-code icon"></i><br>
					@forelse($homes as $home)
					<span>Web Development</span>
					<p>{{$home->web}}</p>
				</div>
				<div class="col-md-3 col-sm-6 serviceelement m-auto">
					<i class="fab fa-bandcamp icon"></i><br>
					<span>Branding Identity</span>
					<p>{{$home->brand}}</p>
				</div>
				<div class="col-md-3 col-sm-6 serviceelement m-auto">
					<i class="fas fa-truck"></i><br>
					<span>Fast Delivery</span>
					<p>{{$home->delivery}}</p>
					@empty
					@endforelse
				</div>
			</div>
		</div>
	</div>
	<div class="row design">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<h2 class="col-md-12 col-sm-6">Design Skill</h2>
					<h6 class="col-md-12 col-sm-6">HTML5</h6>
					<div class="progress">
						<div class="progress-bar html">70%</div>
					</div><br>
					<h6>Bootstrap</h6>
					<div class="progress">
						<div class="progress-bar bootstrap">75%</div>
					</div><br>
					<h6>CSS</h6>
					<div class="progress">
						<div class="progress-bar css">65%</div>
					</div><br>
				</div>
				<div class="col-md-6">
					<h2 class="col-md-12 col-sm-6">Code Skill</h2>
					<h6>Laravel</h6>
					<div class="progress">
						<div class="progress-bar laravel">70%</div>
					</div><br>
					<h6>Jquery</h6>
					<div class="progress">
						<div class="progress-bar jquery">60%</div>
					</div><br>
					<h6>Javascript</h6>
					<div class="progress">
						<div class="progress-bar javascript">60%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection