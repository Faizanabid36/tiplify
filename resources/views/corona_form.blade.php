@extends('layouts.main')


@section('content')
    <section class="ftco-section bg-light">
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
                                        Welcome to {{ $restaurant->firmname }}!</h2>
                                    <p class="mb-4"
                                       style=" text-align: left;color: white;font-weight: 200;font-size: 21px">
                                        Please fill out our digital corona reporting form. Your data will be stored in
                                        compliance with the GDPR and automatically deleted after 30 days.</p>
                                    <p class="mb-4"
                                       style=" text-align: left;color: white;font-weight: 200;font-size: 16px">
                                        (Fields marked with an * are mandatory)
                                    </p>

                                    <form method="POST" id="contactForm" action="{{route('corona_form.submit')}}"
                                          name="contactForm" class=" ">
                                        @csrf
                                        @if(Session::has('errors'))
                                            <h6 class="text-danger mb-3 mt-1 font-weight-bold">
                                                <strong>{{ ucfirst(Session::get('errors')->first()) }}</strong>
                                            </h6>
                                        @endif
                                        <input type="hidden" name="res_id" value="{{$restaurant->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Name"
                                                           required
                                                           minlength="3"
                                                           maxlength="30"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="vorname" id="vorname"
                                                           placeholder="Sirname"
                                                           minlength="3"
                                                           maxlength="30"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email"
                                                           required
                                                           minlength="5"
                                                           maxlength="30"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="telefon" id="telefon"
                                                           placeholder="Phone"
                                                           required
                                                           minlength="8"
                                                           maxlength="16"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="intro-box w-100 d-flex my-3">
                                                    <div class="icon d-flex align-items-center "
                                                         style=" border: 2px solid #2b3349;">
                                                        <div class="round">
                                                            <input type="checkbox" name="accept" id="checkbox"/>
                                                            <label for="checkbox"></label>
                                                        </div>
                                                    </div>
                                                    <div class="text px-3">
                                                        <h6 style="text-align: justify;"> I confirm that the information
                                                            I have provided is correct and I do not suffer from COVID 19
                                                            typical Disease symptoms (loss of smell and taste, Fever,
                                                            cough or shortness of breath) suffer or currently suffer
                                                            from Quarantined.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group font-weight-bolder">
                                                    <button class="font-weight-bold"
                                                            style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #eb295c;color: white;">
                                                        Continue
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
