<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<style>
    #qrcode {
        position: absolute;
        left: 0px;

    }

    #img_pdf1 {
        position: absolute;
        left: 0px;

    }

    #img_pdf2 {
        position: absolute;
        left: 240px;


    }

    #img_pdf3 {
        position: absolute;
        left: 480px;

    }

    #two {
        margin-left: 50px;
    }

    .rotate {

        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        margin-top: 220px;
    }

    .ver {
        -moz-transform: scale(-1, 1);
        -webkit-transform: scale(-1, 1);
        -o-transform: scale(-1, 1);
        -ms-transform: scale(-1, 1);
        transform: scale(-1, 1);
    }

    #logo {
        position: absolute;
        bottom: -60px;
        right: -250px;

    }

    #logo1 {
        position: absolute;
        top: 210px;
        right: -250px;

    }

    /*#h {*/
    /*    right: 400px;*/
    /*}*/
</style>


<section class="ftco-section rotate">
    <div class="container ">
        <div class="row ">
            <div id="qrcode">
                <div class="col-lg-4 ftco-animate">
                    <h2 style="font-weight:600; font-family: 'Poppins', Arial, sans-serif" id="h">{{$firmname}}</h2>
                    <div class="story-wrap d-md-flex align-items-center">
                        <div><img src="{{$img4}}" style="height: 200px;width: auto;"></div>

                    </div>
                    <span style="font-weight:600;font-size: 21px;margin-left: 15px;"><a class="text-dark"
                                                                                        href="{{$link}}">{{$link}}</a></span>
                </div>
            </div>

            <div class="col-lg-8 ftco-animate" id="two">
                <h4 style="font-weight:normal;">Das papierlose Corona-Formular für unsere Gäste.<br><span
                        style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                <div class="row">
                    <div class="col-lg-4" id="img_pdf1">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img}}" style="height: 150px;width: auto;"></div>
                            </div>
                            <h6 style="font-weight:500;">1. QR-Code <br>scannen oder URL <br> eingeben.</h6>
                        </div>
                    </div>
                    <div class="col-lg-3" id="img_pdf2">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img2}}" style="height: 150px;width: auto;"></div>
                            </div>
                            <h6 style="font-weight:500;">2. Formular<br> ausfüllen und <br> absenden.</h6>
                        </div>
                    </div>
                    <div class="col-lg-5" id="img_pdf3">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img3}}" style="height: 150px;width: auto;"></div>
                            </div>
                            <h6 style="font-weight:500;">3.Formular ausfüllen und absenden.</h6>
                        </div>
                        <div id="logo1">
                            <img src="{{$logo}}" style="height: 50px;width: inherit;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<section class="ftco-section ">
    <div class="container ">
        <div class="row ">
            <div id="qrcode">
                <div class="col-lg-4 ftco-animate">
                    <h2 style="font-weight:600; font-family: 'Poppins', Arial, sans-serif" id="h">{{$firmname}}</h2>
                    <div class="story-wrap d-md-flex align-items-center">
                        <div><img src="{{$img4}}" style="height: 190px;width: auto;"></div>
                    </div>
                    <h1 style="font-weight:600;font-size: 20px;"><a href="{{$link}}">{{$link}}</a>
                    </h1>
                </div>
            </div>

            <div class="col-lg-8 ftco-animate" id="two">
                <h4 style="font-weight:normal;">Das papierlose Corona-Formular für unsere Gäste.<br><span
                        style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                <div class="row">
                    <div class="col-lg-4" id="img_pdf1">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img}}" style="height: 150px;"></div>
                            </div>
                            <h6 style="font-weight:500;">1. QR-Code <br>scannen oder URL <br> eingeben.</h6>
                        </div>
                    </div>
                    <div class="col-lg-3" id="img_pdf2">
                        <div class="text pl-md-5">
                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img2}}" style="height: 150px;width: auto;"></div>
                            </div>
                            <h6 style="font-weight:500;">2. Formular<br> ausfüllen und <br> absenden.</h6>
                        </div>
                    </div>
                    <div class="col-lg-5" id="img_pdf3">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img3}}" style="height: 150px;width: auto;"></div>
                            </div>
                            <h6 style="font-weight:500;">3.Formular ausfüllen und absenden.</h6>
                        </div>
                        <div id="logo">
                            <img src="{{$logo}}" style="height: 50px;width: inherit;">
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
</body>
</html>
