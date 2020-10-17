<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CustomClass\Methods;
use PDF;
use URL;
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
        $svg=Methods::img_enc_base64(Methods::get_path('/qrcodes/'.$user->restaurant->unique_key.'.svg')); 
        $img1=Methods::get_path('/images/1.PNG');
        $img2=Methods::get_path('/images/2.PNG');

        return '<div class="row justify-content-left" style="width:1000px">
        <img src="'.$img1.'" alt="qrcode">
     </div>
     <div class="row justify-content" >
     <div style="background-color:white">
     <h1 style="margin-left:80px">'.$user->restaurant->firmname.'</h1>
     <img src="'.$svg.'" style="margin-left:50px" width="150px" height="200px" alt="qrcode">
     </div>
    
     <img src="'.$img2.'" alt="qrcode"  >
        
     </div>
     <div class="row justify-content-left">
        
     </div>
 </div>';
        // return ' <div class="container">
        // <div class="row justify-content-center">
        //    <img src="'.$svg.'" alt="qrcode">
        //    <p>'.$key.'</p>
        // </div>
        // </div>';
   
    }
    
}
