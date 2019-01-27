@extends('layouts.User-Home')
@section('title')
	PortFolio
@endsection
@section('container')
<div class="container-fluid">
	<div class="row itemport">
		<div class="col-md-12 col-sm-12 portheader">
			<div class="row">
				<div class="col-md-12 col-sm-6">
					<h2 class="col-sm-3 m-auto portheader">PortFolio</h2>
					@foreach($ports as $port)
					<p class="portitemp">
						{{$port->portfolio}}
					</p>
					@endforeach
				</div>
			</div>	
		</div>
	</div>
	@forelse($ports as $port)
	<div class="row m-auto">
		<div class="col-md-12 col-sm-6 wrapport">
			<h2 class="col-md-3 col-sm-4 m-auto portheader2 pull-right">{{$port->heading1}}</h2>
			<div class="row wrapport1">
				<div class="col-md-4 m-auto">
					<a href="{{$port->sitelink1}}" class="btn btn-success col-sm-12">View Site</a>
				</div>
			</div>
		</div>
		<img class="img-fluid m-auto" src="{{asset('images/uploads')}}/{{$port->site1image}}" id="portimage">
	</div>
	<div class="row m-auto">
		<div class="col-md-12 col-sm-6 wrapport">
			<h2 class="col-md-3 col-sm-6 m-auto portheader2 pull-right">{{$port->heading2}}</h2>
			<div class="row wrapport1">
				<div class="col-md-4 m-auto">
					<a href="{{$port->sitelink2}}" class="btn btn-success col-sm-12">View Site</a>
				</div>
			</div>
		</div>
		<img class="img-fluid m-auto" src="{{asset('images/uploads')}}/{{$port->site2image}}" id="portimage">
	</div>
	<div class="row m-auto">
		<div class="col-md-12 col-sm-6 wrapport">
			<h2 class="col-md-3 col-sm-6 m-auto portheader2 pull-right">{{$port->heading3}}</h2>
			<div class="row wrapport1">
				<div class="col-md-4 m-auto">
					<a href="{{$port->sitelink3}}" class="btn btn-success col-sm-12">View Site</a>
				</div>
			</div>
		</div>
		<img class="img-fluid m-auto" src="{{asset('images/uploads')}}/{{$port->site3image}}" id="portimage">
	</div>
	@empty
	@endforelse
</div>
@endsection