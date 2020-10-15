<?php

namespace App\Http\Controllers;

use App\GuestInfo;
use App\Notifications\FormFilledNotification;
use App\Restaurants;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function fill(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:64',
            'vorname'=>'required|max:64',
            'email'=>'required|max:64|email',
            'telefon'=>'required|max:18',
        ]);
        $guest = GuestInfo::create($request->except('_token'));
        $guest->notify(new FormFilledNotification());
        return back()->withSuccess('You have filled the form');
    }

    public function view_form($key)
    {
        $restaurant = Restaurants::whereUniqueKey($key)->firstOrFail();
        return view('corona_form', compact('restaurant'));
    }
}
