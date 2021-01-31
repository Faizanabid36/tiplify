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
        margin-top:-45px;
    }

    #two2 {
        margin-left: 50px;
        margin-bottom:15px;
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
    /* div {
  width: 100%;
  border: 1px solid #000000;
}

div.a {
  word-wrap: normal;
}
div.b {
  word-wrap: break-word;
} */

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
                    <span style="font-weight:600;font-size: 16px;margin-left: 15px; font-family: 'Poppins', Arial, sans-serif"><a class="text-dark"
                                                                                        href="{{$link}}">18.194.242.204//form/{{$key}}</a></span>
                </div>
            </div>

            <div class="col-lg-8 ftco-animate" id="two2">
                <h4 style="font-weight:normal;">The paperless corona form for our guests.<br><span
                        style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                <div class="row">
                    <div class="col-lg-4" id="img_pdf1">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img}}" style="height: 150px;width: auto;margin-left:-30px;"></div>
                            </div>
                            <h6 style="font-weight:500; font-family: 'Poppins', Arial, sans-serif">1. QR-Code <br>scan or enter <br> url.</h6>
                        </div>
                    </div>
                    <div class="col-lg-3" id="img_pdf2">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img2}}" style="height: 150px;width: auto;margin-left:-50px;"></div>
                            </div>
                            <h6 style="font-weight:500; font-family: 'Poppins', Arial, sans-serif;margin-left:-30px;">2. Fill<br> form & send it <br> off.</h6>
                        </div>
                    </div>
                    <div class="col-lg-5" id="img_pdf3">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img3}}" style="height: 150px;width: auto;margin-left:-70px;"></div>
                            </div>
                            <h6 style="font-weight:500; font-family: 'Poppins', Arial, sans-serif;margin-left:-45px;">3.Fill out the form and send it off.</h6>
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
                    <h2 style="font-weight:600; font-family: 'Poppins', Arial, sans-serif" id="h" class="b">{{$firmname}}</h2>

                    <div class="story-wrap d-md-flex align-items-center">
                        <div><img src="{{$img4}}" style="height: 190px;width: auto;"></div>
                    </div>
                    <span style="font-weight:600;font-size: 16px;margin-left: 15px; font-family: 'Poppins', Arial, sans-serif"><a class="text-dark"
                                                                                        href="{{$link}}">18.194.242.204//form/{{$key}}</a></span>

                </div>
            </div>

            <div class="col-lg-8 ftco-animate" id="two">
                <h4 style="font-weight:normal;">The paperless corona form for our guests.<br><span
                        style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                <div class="row">
                    <div class="col-lg-4" id="img_pdf1">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img}}" style="height: 150px; margin-left:-30px;"></div>
                            </div>
                            <h6 style="font-weight:500; font-family: 'Poppins', Arial, sans-serif">1. QR-Code <br>scan or enter <br> url.</h6>
                        </div>
                    </div>
                    <div class="col-lg-3" id="img_pdf2">
                        <div class="text pl-md-5">
                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img2}}" style="height: 150px;width: auto; margin-left:-50px;"></div>
                            </div>
                            <h6 style="font-weight:500;margin-left:-30px; font-family: 'Poppins', Arial, sans-serif">2. Fill<br> form & send it <br> off.</h6>
                        </div>
                    </div>
                    <div class="col-lg-5" id="img_pdf3">
                        <div class="text pl-md-5">

                            <div class="story-wrap d-md-flex align-items-center">
                                <div><img src="{{$img3}}" style="height: 150px;width: auto;margin-left:-70px;"></div>
                            </div>
                            <h6 style="font-weight:500;margin-left:-45px; font-family: 'Poppins', Arial, sans-serif;">3.Fill out the form and send it off.</h6>
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
