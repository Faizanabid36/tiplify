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
                                        Bestätigen Sie Ihre E-Mail
                                    </h3>
                                    <h4>
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Ein neuer Verifizierungslink wurde an Ihre E-Mail-Adresse geschickt.') }}
                                            </div>
                                        @endif
                                    </h4>

                                    <h3 class="mb-4" style=" text-align: center;color: #b6b6b6;font-weight: 600;">
                                        {{ __('Bevor Sie fortfahren, überprüfen Sie bitte Ihre E-Mail auf einen Verifizierungslink.') }}
                                        {{ __('Wenn Sie die E-Mail nicht erhalten haben,') }},
                                        <form class="d-inline" method="POST"
                                              action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit"
                                                    style="font-weight: 600;font-size: 25px"
                                                    class="text-white btn btn-link align-baseline">
                                                <u>{{ __('klicken Sie hier um eine neue E-Mail anzufordern') }}.</u>
                                            </button>
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

