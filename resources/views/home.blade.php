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
                                    <h2 style="  color: white;font-weight: 900; font-size: 50px;">Hello {{$user->name}}
                                        !</h2>
                                    <p class="mb-3" style="color: white;font-weight: 200;">
                                        You can find them all here
                                        important
                                        Functions and information about your digital corona form.
                                    </p>
                                    <span class="mb-2" style="color: white;font-weight: 500;font-size: 16px;">
                                        Guest form:
                                        <u>
                                            <a class="text-white "
                                               href="{{route('corona_form.view',auth()->user()->restaurant->unique_key)}}">
                                                {{route('corona_form.view',auth()->user()->restaurant->unique_key)}}
                                            </a>
                                        </u>
                                    </span>
                                    <br><br>
                                    <form action="{{route('how_it_works')}}" method="GET">
                                        <button class="font-weight-bold"
                                                style="cursor: pointer; border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 3px solid #4ae3c0;">
                                            <a class="text-white" href="{{route('how_it_works')}}">
                                                How does it work?
                                            </a>
                                        </button>
                                    </form>
                                    <br> <br><br>
                                    <form action="{{route('pdf.download')}}" method="GET">
                                        <button class="font-weight-bold"
                                                style="cursor: pointer; border-radius: 25px;background-color: #4ae3c0;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;">
                                            <a class="text-white" href="{{route('pdf.download')}}">
                                                Get the QR code
                                            </a></button>
                                    </form>
                                    <br><br><br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form action="{{route('download.xlsx')}}" method="GET">
                                                <button class="font-weight-bold"
                                                        style="cursor: pointer; border-radius: 25px;background-color: #4ae3c0;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 2px solid #4ae3c0;color: white;">
                                                    <a class="text-white" href="{{route('download.xlsx')}}">
                                                        Retrieve guest list
                                                    </a>
                                                </button>
                                            </form>
                                            <br><br><br>
                                        </div>
                                        <div class="col-lg-6">
                                            <button class="font-weight-bold"
                                                    style=" border-radius: 25px;background-color: #2b3349;background-position: left top;background-repeat: repeat; width: 270px; height: 55px; border: 3px solid #4ae3c0;color: white;">
                                                Evaluate
                                            </button>
                                            <br><br>
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

