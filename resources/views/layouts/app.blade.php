<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'User Roles and Permissions Tutorial') }}</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
User Roles and Permissions
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto"></ul>
<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
@guest
<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
@else
<li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
{{-- @role('writer') --}}
<li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
<li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
{{-- @endrole --}}
<li class="nav-item dropdown">
    
{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a> --}}

 <nav class=" space-x-4 md:ml-auto flex flex-wrap items-center justify-center text-sm sm:text-base">
     <div class="d-flex flex-row bd-highlight">
            @guest
            <a class="h-9 px-4 pt-1.5 sm:pt-1 md:w-auto tracking-wide text-primary  transition-colors duration-200 border border-primary rounded"
                href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
            <a class="h-9 px-4 pt-1.5 tracking-wide text-white transition duration-200 rounded md:w-auto bg-primary hover:bg-primarydark"
                href="{{ route('register') }}">{{ __('Sign Up') }}</a>
            @endif
            @else
         
            <a a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
            <a href="{{ route('register') }}" class="nav-link"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
           
            @endguest
     </div>
        </nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
</ul>
</div>
</div>
</nav>
<main class="py-4">
<div class="container">
@yield('content')
</div>
</main>
</div>
</body>
</html>