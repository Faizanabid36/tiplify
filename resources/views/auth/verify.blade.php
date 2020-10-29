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
                                    <h3 style=" text-align: center;  color: white;font-weight: 900; font-size: 50px;">
                                        Verify Your Email
                                    </h3>
                                    <h4>
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif
                                    </h4>

                                    <h3 class="mb-4" style=" text-align: center;color: #b6b6b6;font-weight: 600;">
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }},
                                        <form class="d-inline" method="POST"
                                              action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit"
                                                    style="font-weight: 600;font-size: 25px"
                                                    class="text-white btn btn-link align-baseline">
                                                <u>{{ __('click here to request another') }}</u>
                                            </button>
                                            .
                                        </form>
                                    </h3>
                                    <br>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

