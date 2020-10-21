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
        $pdf->loadHTML($this->pdf_data($user))->setPaper('a4','landscape');
        //uncomment this line to direct download
        //return $pdf->download($user->restaurant->firmname.".pdf");
        return $pdf->stream();
    }
    public function pdf_data(User $user)
    {
       
        $img=Methods::get_path('images/p2.png');
        $img2=Methods::get_path('images/p1.png');
        $img3=Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.svg');
      
        $link=route('corona_form.view',$user->restaurant->unique_key);
        $firmname=$user->restaurant->firmname;
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
            top: 0px;
        }
        #img4 {
            position: absolute;
            
            right:40px;
            bottom:0px;
            
        }
        </style>
        
        <div id="container">
        <img src="'.$img.'" id="img1" width="100%"/>
        <div id="img2">
        <h2>'.$firmname.'</h2>
      <br>
      <br>
        <img src="'.$img3.'" width="200px" height="200px"/>
        <h3>'.$link.'</h3>
        </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <img src="'.$img2.'" id="img3" width="100%"/>
        <div id="img4">
        
        <img src="'.$img3.'" width="200px" height="200px"  />
        
        </div>
        </div>
        
        
        </body>
        </html>
        ';
   
    }

}
