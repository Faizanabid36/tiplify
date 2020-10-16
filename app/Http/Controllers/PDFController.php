<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
class PDFController extends Controller
{
    
    public function view_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $key=$user->restaurant->unique_key;

        return view('pdf_view',['key'=>$key]);
    }
    public function download_pdf()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->pdf_data($user->restaurant->unique_key));
        return $pdf->download($user->restaurant->firmname.".pdf");
    }
    public function pdf_data(string $key)
    {
        return ' <div class="container">
        <div class="row justify-content-center">
           <img src="/qrcodes/'.$key.'.svg" alt="qrcode">
           <p>/qrcodes/'.$key.'.svg</p>
        </div>
    </div>';
    }
}
