@extends('layouts.main')

@section('content')
    <section class="ftco-section mt-5" id="slide_on_mobile">

        <div class="row mob" style="color: white;">
            <div class="col-md-2 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">

                    <div class="media-body p-2 mt-3 ">
                        <p>1. QR-Code mit Link zum Formular und Anleitung für die Gäste abrufen!</p>
                    <!-- <img src="{{asset('assets/images/image 8.png')}}"><br><br>
                        <img src="{{asset('assets/images/image 9.png')}}"> -->
                    </div>

                </div>
            </div>
            <div class="col-md-2 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">

                    <div class="media-body p-2 mt-3">
                        <p>2. QR-Code mit Anleitung Drucken und auslegen oder an der Tür aufhängen.</p>
                    <!--  <img src="{{asset('assets/images/image 10.png')}}"> -->
                    </div>

                </div>
            </div>
            <div class="col-md-2 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">

                    <div class="media-body p-2 mt-3">
                        <p>3. Die Gäste Scannen den QR-Code und gelangen auf das Formular und füllen es aus.</p>
                    <!-- <img src="{{asset('assets/images/image 11.png')}}"> -->
                    </div>

                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">

                    <div class="media-body p-2 mt-3">
                        <p>4. Nach Formularversand erhalten die Gäste eine Bestätigungsseite und eine Email.  Lassen Sie sich eines von beiden zeigen.</p>
                    <!--  <img src="{{asset('assets/images/image 12.png')}}"> -->
                    </div>

                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
                <div class="d-block">

                    <div class="media-body p-2 mt-3">
                        <p>5. Die Gästedaten werden 30 Tage lang DSGVO konform gespeichert und dann automatisch gelöscht. Bei Bedarf können Gästedaten abgerufen werden oder im Ernstfall kann eine Meldung an die Gäste per Mail erfolgen. </p>
                    <!--  <img src="{{asset('assets/images/image 14.png')}}"> -->
                    </div>

                </div>
            </div>

        </div>

        <div class="row" style="color: white;text-align: center!important;">
            <div class="col-md-2 d-flex services align-self-stretch ftco-animate align-items-center">
                <div class="d-block">

                    <div class="media-body">

                        <img src="{{asset('assets/images/image 8.png')}}"><br><br>
                        <img src="{{asset('assets/images/image 9.png')}}">
                        <p style="visibility: hidden;">Even the all-powerful </p>
                    </div>

                </div>
            </div>
            <div class="col-md-2 d-flex services align-self-stretch ftco-animate align-items-center">
                <div class="d-block">

                    <div class="media-body ml-2">
                        <img src="{{asset('assets/images/image 10.png')}}">
                        <p style="visibility: hidden;">Even the all-powerful </p>
                    </div>

                </div>
            </div>
            <div class="col-md-2 d-flex services align-self-stretch ftco-animate align-items-center">
                <div class="d-block">

                    <div class="media-body ml-5">
                        <img src="{{asset('assets/images/image 11.png')}}">
                        <p style="visibility: hidden;">Even the all-powerful </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch ftco-animate align-items-center">
                <div class="d-block">

                    <div class="media-body">
                        <img src="{{asset('assets/images/image 12.png')}}">
                        <p style="visibility: hidden;">Even the all-powerfuldassdasdasdasd </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch ftco-animate align-items-center">
                <div class="d-block">

                    <div class="media-body">
                        <img src="{{asset('assets/images/image 14.png')}}">
                        <p style="visibility: hidden;">Even the all-powerful </p>

                    </div>

                </div>
            </div>

        </div>

    </section>

    <section class="ftco-section testimony-section bg-secondary" id="slide_on_desk">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">

            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="d-block text-center co align-items-center">
                                <p>1. QR-Code mit Link zum Formular und Anleitung für die Gäste abrufen!</p>

                                <img src="{{asset('assets/images/image 8.png')}}" class=""><br><br>
                                <img src="{{asset('assets/images/image 9.png')}}">


                            </div>
                        </div>
                        <div class="item">
                            <div class="d-block text-center co align-items-center">
                                <p>2. QR-Code mit Anleitung Drucken und auslegen oder an der Tür aufhängen.</p>

                                <img src="{{asset('assets/images/image 10.png')}}">


                            </div>
                        </div>

                        <div class="item">
                            <div class="d-block text-center co align-items-center">
                                <p>3. Die Gäste Scannen den QR-Code und gelangen auf das Formular und füllen es aus.</p>


                                <img src="{{asset('assets/images/image 11.png')}}">


                            </div>
                        </div>
                        <div class="item">
                            <div class="d-block text-center co align-items-center">
                                <p>4. Nach Formularversand erhalten die Gäste eine Bestätigungsseite und eine Email.  Lassen Sie sich eines von beiden zeigen.</p>

                                <img src="{{asset('assets/images/image 12.png')}}">


                            </div>
                        </div>
                        <div class="item">
                            <div class="d-block text-center co align-items-center">
                                <p>5. Die Gästedaten werden 30 Tage lang DSGVO konform gespeichert und dann automatisch gelöscht. Bei Bedarf können Gästedaten abgerufen werden oder im Ernstfall kann eine Meldung an die Gäste per Mail erfolgen. </p>

                                <img src="{{asset('assets/images/image 14.png')}}">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
