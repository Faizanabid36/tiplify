@extends('layouts.main')


@section('content')
    <section class="ftco-section bg-light">
        <div style="display: flex;z-index: 999999;margin-top: 50px;margin-left: 40px;">
            <a href="{{route('restaurant')}}">
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
                                    <img src="{{asset('assets/images/image 16.png')}}" style="width: inherit;">

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-5 d-flex align-items-stretch text-center ">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4 ">
                                    <h2 style=" text-align: center;  color: white;font-weight: 900; font-size: 50px;">
                                        Hello!</h2>
                                    <p class="mb-4" style=" text-align: center;color: white;font-weight: 200;">Angaben
                                        zum
                                        Unternehmen/Location</p>

                                    <form method="POST" id="contactForm" action="{{ route('register') }}"
                                          name="contactForm"
                                          class=" ">
                                        @csrf
                                        <input name="res_id" value="{{ Session::get('resid') }}" hidden>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    @if(Session::has('errors'))
                                                        <h6 class="text-danger mb-2 mt-1 font-weight-bold">
                                                            <strong>{{ ucfirst(Session::get('errors')->first()) }}</strong>
                                                        </h6>
                                                    @endif
                                                    @if($errors->has('name'))
                                                        <div class="error">{{ $errors->first('name') }}</div>
                                                    @endif
                                                    <input type="text" required
                                                           class="form-control  @error('name') is-invalid @enderror"
                                                           name="name"
                                                           id="name" placeholder="Name" value="{{Session::get('name')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-4">
                                                <div class="form-group">
                                                    <input type="text" required
                                                           class="form-control @error('surname') is-invalid @enderror"
                                                           name="surname" id="surname" placeholder="Surname" value="{{Session::get('surname')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                                @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           required name="email" id="email" placeholder="Email" value="{{Session::get('email')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" required
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password" id="password" placeholder="Password" value="{{Session::get('password')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                           name="password_confirmation" id="password-confirm"
                                                           placeholder="Confirm"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group" style="margin-top:10px;">
                                                    <button
                                                        class="font-weight-bold"
                                                        style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 300px; height: 50px; border: 2px solid #eb295c;color: white;">
                                                        Registrierung Abschließen
                                                    </button>
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
