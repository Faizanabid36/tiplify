<?php

namespace App\Http\Controllers;

use App\User;
use App\CustomClass\Methods;
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
        $filepath=Methods::get_path('/qrcodes/'.$key.'.svg');
        if (!file_exists($filepath)){
            QrCode::size(200)->format('svg')->generate(route('corona_form.view',$key),$filepath);
        }
             return view('home', compact('user'));
    }

    public function download()
    {
        return Excel::download(new \App\Exports\GuestInfoExport(), 'users.xlsx');
    }
}
