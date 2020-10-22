<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <script>
        window.TIPLIFY_APP = {
            base_url: "{{url('/')}}/",
            asset_path: "{{asset('')}}"
        }
    </script>
    <!-- Fonts -->

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <img class="logo" src="{{asset('assets/images/image_15.png')}}">
        

        @if (Route::has('login'))
            <div >
                @auth
                    <!-- <a href="{{ url('/home') }}">Home</a> -->
                    <button class="mob" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #4ae3c0;color: white;"><a  href="{{ url('/home') }}">Home</a> </button>
                    <button class="mob" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #4ae3c0;color: white;"><a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> </button>
                                                      
	    
                @else
                    <!-- <a href="{{ route('login') }}">Login</a> -->
                    <button class="mob" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #4ae3c0;color: white;"> <a href=" {{ route('login') }}">Login</a> </button>
                    <button class="mob" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #4ae3c0;color: white;"><a href=" {{ route('restaurant') }}">Register</a></button>
                @endauth
            </div>
        @endif
      </div>
    </nav>
@yield('content')
@yield('footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/scrollax.min.js')}}"></script>
{{--<script src="{{asset('assets/js/google-map.js')}}"></script>--}}
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
