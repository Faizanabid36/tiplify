<?php

namespace App\Http\Controllers;

use App\User;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::whereId(auth()->user()->id)->with('restaurant')->first();
        $key=$user->restaurant->unique_key;
        //To paste in pdf we have to download qrcode in png. To download qr code in png we have to install imagick extension
        QrCode::size(200)->format('svg')->generate(route('corona_form.view',$key),public_path('qrcodes/'.$key.'.svg'));
        return view('home', compact('user'));
    }

    public function download()
    {
        return Excel::download(new \App\Exports\GuestInfoExport(), 'users.xlsx');
    }
}
