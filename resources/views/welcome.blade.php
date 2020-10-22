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
                    <h2 style=" text-align: center; color: white;font-weight: 900; font-size: 40px;">Das papierlose Corona-Formular für deine Gäste.</h2>
                    <p class="mb-4">Mit nur wenigen Klicks zum kostenlosen online Formular zur Erfassung der Gastdaten inkl. QR-Code.</p>
                    <img src="{{asset('assets/images/image 17.png')}}" style="width: inherit;"> <br>
                     <button class="large" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #4ae3c0;color: white;">Login</button><br><br>
                  <button style=" border-radius: 25px;background-color:#ec295c;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #ec295c;color: white;">Kostenlos registrieren</button>
                   
                   
                  
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
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->

@endsection