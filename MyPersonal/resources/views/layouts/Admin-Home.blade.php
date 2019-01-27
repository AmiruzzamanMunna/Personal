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
    <script src="{{asset('js')}}/adminscript.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    @yield('css')
    @yield('js')
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        @if(Session::has('loggedAdmin'))
        <a class="navbar-brand" href="{{route('admin.index')}}">Amiruzzaman</a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                @if(Session::has('loggedAdmin'))
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" data-target="#demo" href="#">Account</a>
                    <div class="collapse" id="demo">
                        <a href="{{route('admin.adminlogout')}}" class="nav-link">Logout</a>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    <div id="sidebar">
        <div class="toggle-btn" onclick="togglesidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li><a href="{{route('admin.index')}}">Home</a></li>
            <li><a href="{{route('admin.adminPortfolio')}}">Portfolio</a></li>
            <li><a href="{{route('admin.adminAbout')}}">About</a></li>
            <li><a href="{{route('admin.adminFooter')}}">Footer</a></li>
        </ul>
    </div>
    @yield('container')
</body>
</html>