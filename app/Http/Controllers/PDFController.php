<?php

namespace App\Http\Controllers;

use App\User;
use Image;
use PDF;
use Storage;
use URL;

class PDFController extends Controller
{

    public function view_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $key = $user->restaurant->unique_key;
        $img = public_path('images/1.png');
        $img2 = public_path('images/2.png');
        $img3 = public_path('images/3.png');
        $logo = public_path('assets/images/logo2.png');
        $img4 = public_path('/qrcodes/' . $user->restaurant->unique_key . '.svg');
        $link = route('corona_form.view', $user->restaurant->unique_key);
        $firmname = $user->restaurant->firmname;
        $data = compact('user', 'img', 'img2', 'img3', 'img4', 'link', 'logo', 'firmname', 'key');
        return PDF::loadHTML(view('pdf_view', $data))->setPaper('a4','landscape')->stream('download.pdf');
//        $pdf = PDF::loadView('pdf_view', );
//        return $pdf->download('medium.pdf');
//        return view('pdf_view', compact('user', 'img', 'img2', 'img3', 'img4', 'link', 'logo', 'firmname', 'key'));
    }
    public function download_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->pdf_data($user))->setPaper('a4','landscape');
        return $pdf->download($user->restaurant->firmname . ".pdf");
         //return $pdf->stream();

    }
    public function pdf_data(User $user)
    {
        $img = asset('images/1.png');
        $img2 = asset('images/2.png');
        $img3 = asset('images/3.png');
        $logo = asset('assets/images/logo2.png');
        $img4 = asset('/qrcodes/' . $user->restaurant->unique_key . '.svg');
        $link = route('corona_form.view', $user->restaurant->unique_key);
        $firmname = $user->restaurant->firmname;


        $html = '<!DOCTYPE html>
        <html>
        <head>
          <title></title>

          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        </head>
        <body>
        <style>
        #qrcode{
            position:absolute;
            left:0px;

        }
        #img_pdf1{
            position:absolute;
            left:0px;

        }
        #img_pdf2{
            position:absolute;
            left:240px;


        }
        #img_pdf3{
            position:absolute;
            left:480px;

        }
        #two{
            margin-left:50px;
        }
        .rotate{

            -webkit-transform: rotate(180deg);
                    transform: rotate(180deg);
                    margin-top:220px;
          }
          .ver{
            -moz-transform: scale(-1, 1);
          -webkit-transform: scale(-1, 1);
          -o-transform: scale(-1, 1);
          -ms-transform: scale(-1, 1);
          transform: scale(-1, 1);
          }
          #logo{
             position:absolute;
              bottom:-60px;
              right:-250px;

          }
          #logo1{
            position:absolute;
             top:210px;
             right:-250px;

         }
          #h{
              right:400px;
          }
        </style>


           <section class="ftco-section rotate">
             <div class="container ">
               <div class="row ">
                <div id="qrcode">
                 <div class="col-lg-4 ftco-animate">
                   <h1 style="font-weight:600;" id="h">'.$firmname.'</h1>
                   <div class="story-wrap d-md-flex align-items-center">
                     <div><img src="'.$img4.'" style="height: 200px;width: auto;"></div>

                   </div>
                    <h1 style="font-weight:600;font-size: 21px;margin-left: 15px;"><a href="'.$link.'">form/'.$user->restaurant->unique_key.'</a></h1>
                 </div>
                 </div>

                 <div class="col-lg-8 ftco-animate" id="two" >
                    <h4    style="font-weight:normal;">Das papierlose Corona-Formular für unsere Gäste.<br><span style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                   <div class="row">
                     <div class="col-lg-4" id="img_pdf1">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                       <h6 style="font-weight:500;">1. QR-Code  <br>scannen oder URL  <br> eingeben.</h6>
                               </div>
                       </div>
                        <div class="col-lg-3" id="img_pdf2">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img2.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                        <h6 style="font-weight:500;">2. Formular<br>  ausfüllen und <br> absenden.</h6>
                               </div>
                       </div>
                        <div class="col-lg-5" id="img_pdf3">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img3.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                        <h6 style="font-weight:500;">3.Formular ausfüllen und absenden.</h6>
                               </div>
                               <div id="logo1">
                               <img src="'.$logo.'" style="height: 50px;width: inherit;">
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
                   <h1 style="font-weight:600;" id="h">'.$firmname.'</h1>
                   <div class="story-wrap d-md-flex align-items-center">
                     <div><img src="'.$img4.'" style="height: 190px;width: auto;"></div>

                   </div>
                    <h1 style="font-weight:600;font-size: 21px;margin-left: 15px;"><a href="'.$link.'">form/'.$user->restaurant->unique_key.'</a></h1>
                 </div>
                 </div>

                 <div class="col-lg-8 ftco-animate" id="two" >
                    <h4 style="font-weight:normal;">Das papierlose Corona-Formular für unsere Gäste.<br><span style="font-weight: bold; font-style: italic;"> Einfach, sicher, kontaktlos!</span></h4>
                   <div class="row">
                     <div class="col-lg-4" id="img_pdf1">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                       <h6 style="font-weight:500;">1. QR-Code  <br>scannen oder URL  <br> eingeben.</h6>
                               </div>
                       </div>
                        <div class="col-lg-3" id="img_pdf2">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img2.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                        <h6 style="font-weight:500;">2. Formular<br>  ausfüllen und <br> absenden.</h6>
                               </div>
                       </div>
                        <div class="col-lg-5" id="img_pdf3">
                               <div class="text pl-md-5">

                                   <div class="story-wrap d-md-flex align-items-center">
                                       <div><img src="'.$img3.'" style="height: 150px;width: auto;"></div>
                                   </div>
                                        <h6 style="font-weight:500;">3.Formular ausfüllen und absenden.</h6>
                               </div>
                               <div id="logo">
                               <img src="'.$logo.'" style="height: 50px;width: inherit;">
                               </div>
                       </div>
                   </div>
                 </div>

               </div>


             </div>
           </section>


        </body>
        <footer>

        </footer>
        </html>';

        return $html;

    }

}
