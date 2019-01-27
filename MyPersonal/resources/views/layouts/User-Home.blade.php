<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="text/css" href="{{asset('images')}}/logo.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/user.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  	@yield('css')
  	@yield('js')
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="{{route('user.index')}}">Amiruzzaman</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsenavbar">
			<ul class="navbar-nav m-auto">
				<li class="nav-item"><a class="nav-link" href="{{route('user.index')}}">HOME</a></li>
				<li class="nav-item"><a class="nav-link" href="{{route('user.portFolio')}}">PORTFOLIO</a></li>
				<li class="nav-item"><a class="nav-link" href="{{route('user.about')}}">ABOUT</a></li>
				<li class="nav-item"><a class="nav-link" href="{{route('user.contact')}}">CONTACT</a></li>
			</ul>
		</div>
	</nav>
	@yield('container')
	<div class="row footer">
		<div class="col-md-12 m-auto">
			<div class="row">
				<div class="col-sm-6 m-auto">
					<div class="row footerimage m-auto">
						<div class="col">
							@forelse($footers as $footer)
							<a href="{{$footer->facebook}}"><img src="{{asset('images')}}/fb.png" class="rounded-circle logo" alt="logo"></a>
						</div>
						<div class="col">
							<a href="{{$footer->instagram}}"><img src="{{asset('images')}}/insta.png" class="rounded-circle logo" alt="logo"></a>
						</div>
						<div class="col">
							<a href="{{$footer->twitter}}"><img src="{{asset('images')}}/twitter.png" class="rounded-circle logo" alt="logo"></a>
							@empty
							@endforelse
						</div>
					</div>
				</div>
			</div>
			<div class="row ml-auto">
				<div class="col-sm-12 m-auto">
					<div class="row footeritem ml-auto">
						<div class="col-md-1 col-sm-12 ml-auto">
							<p class="footercontain">Amiruzzaman</p>
						</div>
						<div class="col-md-6 col-sm-8 ml-auto">
							<p class="footercontain">&copy 2019 All Rights Received By Amiruzzaman</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>