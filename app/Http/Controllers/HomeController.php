<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
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

    public function edit_login_view(Request $request)
    {
        return view('editLogin');
    }

    public function edit_login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
        ]);
        if (auth()->user()->email != $request->email) {
            $this->validate($request, [
                'email' => 'required|unique:users',
            ]);
        }
        User::updateOrCreate(['id' => auth()->user()->id], $request->except('_token'));
        return back()->withSuccess('Updated Successfully');

    }
}
