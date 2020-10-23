@extends('layouts.main')
@section('content')
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-5 col-md-7 order-md-last d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 ">
                    <img src="{{asset('assets/images/image 16.png')}}" style="width: inherit;" class="">

                  </div>
                </div>
                <div class="col-lg-7 col-md-5 d-flex align-items-stretch ">
                  <div class="info-wrap bg-primary w-100 p-md-5 p-4 ">
                    <h2 style="  color: white;font-weight: 900; font-size: 50px;">Hello {{$user->name}}!</h2>
                    <p class="mb-4" style="color: white;font-weight: 200;">MiHier findest du alle wichtigen Funktionen und Informationen rund um dein digitales Corona-Formular.</p><br><br><br>

                    <button class="" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;">Wie funktioniert’s?</button><br> <br><br>
                     <button class="" style=" border-radius: 25px;background-color: #4ae3c0;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;"><a class="text-white" href="{{route('pdf.download')}}">
                     QR-Code abrufen
                                </a> </button> <br><br><br>
                   <div class="row">
                       <div class="col-lg-6">
                     <button class="" style=" border-radius: 25px;background-color: #4ae3c0;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;">  <a class="text-white" href="{{route('download.xlsx')}}">
                     Gästeliste abrufen
                     </a></button> <br><br><br>
                   </div>
                   <div class="col-lg-6">

                     <button class="" style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;">Druck-Formular abrufen</button> <br><br>
                   </div>
                     </div>



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
