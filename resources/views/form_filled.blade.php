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
                                        Thank You
                                    </h2>
                                    <div style="display: flex" class="mt-1 mb-2">
                                        <img src="{{asset('assets/images/image 7.png')}}" style="margin: 0px auto;">
                                    </div>
                                    <h3 class="mb-4"
                                        style=" text-align: center;color: white;font-weight: 600;">{{$guest->name}}, You
                                        filled the form of {{$restaurant->firmname}} around
                                        {{now()->toFormattedDateString()}}, {{now()->format('H:i A')}}.</h3>
                                    <br>
                                    <h5 class="mb-4"
                                        style=" text-align: center;color: rgb(50 225 193);font-weight: 300;">Please show
                                        this screen or your confirmation email to your host or staff as a
                                        confirmation.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
