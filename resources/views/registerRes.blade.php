@extends('layouts.main')

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

                                    <form method="POST" action="{{route('restaurant.store')}}" id="contactForm"
                                          name="contactForm"
                                          class=" ">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    @if(Session::has('errors'))
                                                        <h6 class="text-danger mb-2 mt-1 font-weight-bold">
                                                            <strong>{{ ucfirst(Session::get('errors')->first()) }}</strong>
                                                        </h6>
                                                    @endif
                                                    @if(Session::has('resid'))
                                                        <input type="hidden" value="{{Session::get('resid')}}"
                                                               name="id">
                                                    @endif
                                                    <input type="text" class="form-control" name="firmname"
                                                           id="firmname"
                                                           placeholder="Firmname"
                                                           required
                                                           value="{{Session::get('firmname')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="30" minlength="3"
                                                           required
                                                           name="land" id="land" placeholder="Land"
                                                           value="{{Session::get('land')??''}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input maxlength="50" minlength="5" required type="text"
                                                           class="form-control"
                                                           value="{{Session::get('state')??''}}"
                                                           name="state" id="state" placeholder="State"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="plz" id="plz"
                                                           placeholder="PLZ"
                                                           value="{{Session::get('plz')??''}}"
                                                           maxlength="10" minlength="4" required
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ort" id="ort"
                                                           placeholder="ORT"
                                                           maxlength="30" minlength="3" required
                                                           value="{{Session::get('ort')??''}}"
                                                           style="border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="telefon" id="telefon"
                                                           placeholder="Telefon"
                                                           value="{{Session::get('telefon')??''}}"
                                                           maxlength="20" minlength="8" required
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
