<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

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
    public function edit_login(Request $req)
    {
        if ($req->method()=="GET")
        {
            
            $user=User::whereId(auth()->user()->id)->first();
            // Session::put('id', $user->id);
            // Session::put('name', $user->name);
            // Session::put('surname', $user->surname);
            // Session::put('email', $user->email);
            // Session::put('password', $user->password);
            return view('editLogin',compact('user'));
        }
        else
        {
            $user = User::updateOrCreate(
                [
                    'email' => $req['email']
                ], $req->except('_token')
            );
            return redirect()->route('home');
        }
       
    }
}
