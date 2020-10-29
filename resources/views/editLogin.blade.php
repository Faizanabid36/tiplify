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
                                        Hallo {{auth()->user()->name}}</h2>
                                    <p class="mb-4" style=" text-align: center;color: white;font-weight: 200;">Angaben
                                        zum
                                        Unternehmen/Location</p>

                                    <form method="POST" id="contactForm" action="{{ route('edit.login') }}"
                                          name="contactForm"
                                          class=" ">
                                        @csrf
                                        <input name="res_id" value="{{auth()->user()->id}}" hidden>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    @if(Session::has('errors'))
                                                        <h6 class="text-danger mb-2 mt-1 font-weight-bold">
                                                            <strong>{{ ucfirst(Session::get('errors')->first()) }}</strong>
                                                        </h6>
                                                    @endif
                                                    <input type="text" required
                                                           class="form-control  @error('name') is-invalid @enderror"
                                                           name="name"
                                                           id="name" placeholder="Name" value="{{auth()->user()->name}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" required
                                                           class="form-control @error('surname') is-invalid @enderror"
                                                           name="surname" id="surname" placeholder="Surname"
                                                           value="{{auth()->user()->surname}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           required name="email" id="email" placeholder="Email"
                                                           value="{{auth()->user()->email}}"
                                                           style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group" style="margin-top:10px;">
                                                <div>
                                                    <button
                                                        class="font-weight-bold"
                                                        style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 300px; height: 50px; border: 2px solid #eb295c;color: white;">
                                                        Änderungen aktualisieren
                                                    </button>
                                                </div>
                                                <div class="mt-2 mb-2">
                                                    <span><b>Oder</b></span>
                                                </div>
                                                <div>
                                                    <button
                                                        class="font-weight-bold"
                                                        style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 185px; height: 50px; border: 2px solid #eb295c;color: white;">
                                                        <a class="text-white" href="{{ route('password.request') }}">Passwort
                                                            ändern</a>
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
        </div>
    </section>
@endsection
