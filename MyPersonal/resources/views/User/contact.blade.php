@extends('layouts.User-Home')
@section('title')
	Contact
@endsection
@section('container')
<div class="container-fluid wrapabout">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="row">
				<div class="col-sm-2 m-auto">
					<h2 class="contactheader">Contact</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 m-auto">
					@if(session('message'))
					<div class="alert alert-success m-auto">
						{{session('message')}}
					</div>
					@endif
				</div>
			</div>
			<div class="row ">
				<div class="col-sm-4 contactform m-auto">
					<form action="{{action('UserController@sendEmail')}}" method="POST" class="contactfrm">
						{{csrf_field()}}
						<div class="form-group">
							<input type="text" name="name" class="col-sm-12" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" name="mail" class="col-sm-12" placeholder="Enter Your Mail">
						</div>
						<div class="form-group">
							<textarea type=text rows="4" cols="45" name="yourtext" class="col" placeholder="Your Message"></textarea>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4 ml-auto">
								<input type="submit" class="col btn btn-primary" name="" value="Send">
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
	</div>
</div>
@endsection