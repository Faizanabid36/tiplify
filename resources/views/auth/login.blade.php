@extends('layouts.main')

@section('nav')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img class="logo" src="{{asset('assets/images/image_15.png')}}">

            <button class=""
                    style=" border-radius: 25px;
                    background-color: #2b3349;
                    background-position: left top;
                    background-repeat: repeat;
                    width: 200px;
                    height: 50px;
                    border: 2px solid #4ae3c0;
                    color: white;">
                <a style="color: #4ae3c0;" href="{{route('restaurant')}}">
                    Register
                </a>
            </button>

        </div>
    </nav>
@endsection

@section('content')
    <section class="ftco-section bg-light">
        <div style="display: flex;z-index: 999999;margin-top: 50px;margin-left: 40px;">
            <a href="{{route('welcome')}}">
                <img src="{{asset('assets/icons/Vector.svg')}}" alt="">
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters ">
                            <div class="col-lg-6 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 ">
                                    <img src="{{asset('assets/images/image_16.png')}}" style="width: inherit;">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 d-flex align-items-stretch text-center ">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4 ">
                                    <h2 style=" text-align: center;  color: white;font-weight: 900; font-size: 50px;">
                                        Willkommen zurück!</h2>
                                    <!-- <p class="mb-4" style=" text-align: center;color: white;font-weight: 200;">Angaben zum Unternehmen/Location</p> -->
                                    @if(Session::has('errors'))
                                        <h6 class="text-danger mb-1 mt-1 font-weight-bold">
                                            <strong>{{ ucfirst(Session::get('errors')->first()) }}</strong>
                                        </h6>
                                    @endif
                                    <br>
                                    <form method="POST" id="contactForm" name="contactForm" action="{{route('login')}}"
                                          class="">
                                        <div class="row">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-bottom:30px;">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email"
                                                           required
                                                           maxlength="50"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-bottom:30px;">
                                                    <input type="password" class="form-control" name="password"
                                                           id="password"
                                                           required
                                                           minlength="6"
                                                           placeholder="Password"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-top:10px;">
                                                    <button class="font-weight-bold"
                                                            style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #eb295c;color: white;">
                                                        Weiter
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-top:10px;">
                                                    <!-- <a href="#" style="color:  #eb295c ">Passwort vergessen?</a> -->
                                                    @if (Route::has('password.request'))
                                                        <a style="color: white " href="{{ route('password.request') }}">
                                                            <u>Passwort vergessen?</u>
                                                        </a>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        <form method="POST" action="{{ route('login') }}">--}}
    {{--                            @csrf--}}

    {{--                            <div class="form-group row">--}}
    {{--                                <label for="email"--}}
    {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                    <input id="email" type="email"--}}
    {{--                                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                    @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="form-check">--}}
    {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                    <label class="form-check-label" for="remember">--}}
    {{--                                        {{ __('Remember Me') }}--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-8 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Login') }}--}}
    {{--                                </button>--}}

    {{--                                @if (Route::has('password.request'))--}}
    {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                        {{ __('Forgot Your Password?') }}--}}
    {{--                                    </a>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection

@section('footer')
    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-9 py-5">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Powered by tiplify - das bargelslose Trinkgeld </h2>


                        </div>

                    </div>

                </div>
                <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                    <h2 class="footer-heading">AGB | Datenschutz | Impressum</h2>

                </div>
            </div>
        </div>
    </footer>
@endsection
