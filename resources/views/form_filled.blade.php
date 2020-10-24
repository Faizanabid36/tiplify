@extends('layouts.main')


@section('content')
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters ">
                            <div class="col-lg-12 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 ">
                                    <h2 style=" text-align: center;  color: white;font-weight: 900; font-size: 50px;">
                                        {{$guest->name}}</h2>
                                    <div style="display: flex" class="mt-1 mb-2">
                                        <img src="{{asset('assets/images/image 7.jpg')}}" style="margin: 0px auto;" >
                                    </div>
                                    <h3 class="mb-4" style=" text-align: center;color: white;font-weight: 600;">{{$guest->name}}, dass du
                                        {{now()->toFormattedDateString()}}, um {{now()->format('H:i A')}} Uhr das digitale Corona-Formular von
                                        {{$restaurant->firmname}} ausgefüllt hast.</h3>
                                    <br>
                                    <h5 class="mb-4" style=" text-align: center;color: rgb(50 225 193);font-weight: 300;">Bitte zeige diesen Screen oder deine Bestätigungsmail deinem Gastgeber bzw. dem Personal als Bestätigung. </h5>
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
    <footer class="footer mt-4">
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
