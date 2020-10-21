<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CustomClass\Methods;
use PDF;
use URL;
use Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Storage;
class PDFController extends Controller
{

    public function view_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $key=$user->restaurant->unique_key;
        return view('pdf_view',compact('user'));
    }
    public function download_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->pdf_data($user));
        //uncomment this line to direct download
        //return $pdf->download($user->restaurant->firmname.".pdf");
        return $pdf->stream();
    }
    public function pdf_data(User $user)
    {
        // $main_img=Image::make('images/back.jpg')->resize(700, 800);
        // $img1 = Image::make(Methods::get_path('/images/main.jpg'))->resize(700, 800)->crop(700,400,0,0);
        // $img2 = Image::make(Methods::get_path('/images/main.jpg'))->resize(700, 800)->crop(700,400,0,0)->rotate(-180);
        // //For qrcodes 
        // $qr=Image::make(Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.png'))->resize(200, 200);
        // $qr2=Image::make(Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.png'))->resize(200, 200)->rotate(-180);
        //Mock qrcodes
        // $qr=Image::make(Methods::get_path('/qrcodes/qr.png'))->resize(200, 200);
        // $qr2=Image::make(Methods::get_path('/qrcodes/qr.png'))->resize(200, 200)->rotate(-180);
        // $img1->insert($qr,'right');
        // $img2->insert($qr2,'left');
        // $main_img->insert($img1,'top');
        // $main_img->insert($img2,'bottom');
        // $main_img->save(Methods::get_path('/qrcodes/').$user->restaurant->unique_key.'.png');
        // $svg=Methods::img_enc_base64(Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.svg')); 
        // $img1=Methods::get_path('/images/1.PNG');
        // $img2=Methods::get_path('/images/2.PNG');

//         return '<div class="row justify-content-left" style="width:1000px">
//         <img src="'.$img1.'" alt="qrcode">
//      </div>
//      <div class="row justify-content" >
//      <div style="background-color:white">
//      <h1 style="margin-left:80px">'.$user->restaurant->firmname.'</h1>
//      <img src="'.$svg.'" style="margin-left:50px" width="150px" height="200px" alt="qrcode">
//      </div>

//      <img src="'.$img2.'" alt="qrcode"  >

//      </div>
//      <div class="row justify-content-left">

//      </div>
//  </div>';
        //$path=Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.png');
        $img=Methods::get_path('images/part2.png');
        $img2=Methods::get_path('images/part1.png');
        $img3=Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.svg');
        $img4=Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.svg');
        return '<!DOCTYPE html>
        <html>
        <body >
        <style>
        
        #container {
            position:relative;
        }
        
        #img2 {
            position: absolute;
            left: 40px;
            top: 30px;
        }
        #img4 {
            position: absolute;
            
            right:40px;
            bottom:320px;
            
        }
        </style>
        
        <div id="container">
        <img src="'.$img.'" id="img1" />
        <div id="img2">
        <h2>JOHNs CAFE</h2>
        <br>
        <img src="'.$img3.'" width="150px" height="150px"/>
        <h3>www.google.com</h3>
        </div>
    
        <img src="'.$img2.'" id="img3" />
        <div id="img4">
        
        <img src="'.$img3.'" width="150px" height="150px"  />
        </div>
        </div>
        
        
        </body>
        </html>
        ';
   
    }

}
