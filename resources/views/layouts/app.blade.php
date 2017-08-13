<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Service Advisor</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/estilosProyecto.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/advisoricono.png') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" target="_self"><img src="{{ asset('images/logoadvisor02.png') }}" style="height:36px" class="img-responsive" alt="{{ config('app.name', 'Laravel') }}"></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">@lang('register.login')</a></li>
                            <li><a href="{{ route('userRegister') }}">@lang('register.register')</a></li>
                            <li><a href="{{ route('help') }}">@lang('register.help')</a></li>
                        @else
                            @if (Auth::user()->role == 'admin')
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  @lang('register.administration') <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ route('users') }}">@lang('register.users')</a></li>
                                  <li><a href="{{ route('categories.index') }}">@lang('register.categories')</a></li>
                                  <li><a href="{{ route('services.index') }}">@lang('register.services')</a></li>
                                </ul>
                              </li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">@lang('register.profile')</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            @lang('register.logout')
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                <li>
                                  <a href="{{ route('help') }}">@lang('register.help')</a>
                                </li>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    {{-- <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> --}}

    {{-- Si incluyo bootstrap-min.js junto con app.js deja de funcionar el menu. deje app.js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-9">
      <p>Copyright © 2017 Service Advisor S.A. | <a href="#">Términos y Condiciones</a></p>
    </div>
    <div class="col-sm-3">
      <img src="{{ asset('images/logoadvisor02.png')}}" class="img-responsive" style="height:22px" alt="Image">
    </div>

  </div>
</footer>
</html>
