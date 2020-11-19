@extends('layouts.main')

@section('content')
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-5 col-md-7 order-md-last d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                      <img src="{{asset('assets/images/image 16.png')}}" style="width: inherit;">

                  </div>
                </div>
                  <div class="col-lg-7 col-md-5 d-flex align-items-stretch text-center">
                      <div class="info-wrap bg-primary w-100 p-md-5 p-4 ">
                          <h2 style=" text-align: center; color: white;font-weight: 900; font-size: 40px;">Das
                              papierlose Corona-Formular für deine Gäste.</h2>
                          <p class="mb-4">Mit nur wenigen Klicks zum kostenlosen online Formular zur Erfassung der
                              Gastdaten inkl. QR-Code.</p>
                          <img src="{{asset('assets/images/image 17.png')}}" style="width: inherit;"> <br>
                          <button class="large login_button_hover mt-4"
                                  style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid white;color: white;">
                              <a class="font-weight-bold" style="color: #4AE3C0" href="{{route('login')}}">Login</a>
                          </button>
                          <br><br>
                          <form action="{{route('restaurant')}}">
                              <button
                                  style=" cursor: pointer;border-radius: 25px;background-color:#ec295c;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #ec295c;color: white;">
                                  <a class="text-white font-weight-bold" href="{{route('restaurant')}}">
                                      Kostenlos registrieren
                                  </a>
                              </button>
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
