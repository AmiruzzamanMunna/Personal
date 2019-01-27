<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="shortcut icon" type="text/css" href="{{asset('images')}}/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/adminscript.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	@if(Session::has('loggedAdmin'))
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="{{route('admin.index')}}">Amiruzzaman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="">Account</a></li>
            </ul>
        </div>
    </nav>
    @endif
    <div class="row m-auto">
	<div class="col-md-6 m-auto">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10 adminlogin">
					<div class="card m-auto">
						@if(session('message'))
							<div class="alert alert-success m-auto">
								{{session('message')}}
							</div>
						@endif
					<div class="card-header"><h2>Admin Login</h2></div>
					<div class="card-body">
						<form action="" method="POST" id="Admin">
							{{csrf_field()}}
							<div class="form-group row">
								<label class="col-md-3">User Name:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="username">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Password:</label>
								<div class="col-md-6">
									<input type="Password" class="form-control" name="password">
								</div>
							</div>
							@if($errors->any())
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							@endif
							<div class="row">
								<div class="col-md-8">
									<input type="reset" class="btn btn-danger" name="" value="Reset">
								</div>
								<div class="col-md-3">
									<input type="submit" class="btn btn-success" name="" value="Login">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
