<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;

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
        $user = auth()->user();
        return view('home', compact('user'));
    }


    public function how_it_works()
    {
        return view('how_it_works');
    }

    public function download()
    {
        return Excel::download(new \App\Exports\GuestInfoExport(), 'users.xlsx');
    }
}
