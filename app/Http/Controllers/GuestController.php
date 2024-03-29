<?php

namespace App\Http\Controllers;

use App\GuestInfo;
use App\Notifications\FormFilledNotification;
use App\Restaurants;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function evaluate(Request $request)
    {
        return view('evaluate');
    }
    public function fill(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30|min:3',
            'vorname' => 'max:30|min:3',
            'email' => 'required|max:64|email|min:4',
            'telefon' => 'required|max:16|min:8',
            'seats' => 'required|min:1',
            'date' => 'required',
        ]);
        if(is_null($request->accept))
            return back()->withErrors(['Please Agree to terms and conditions first']);
        $restaurant = Restaurants::find($request->res_id);
        $guest = GuestInfo::create($request->except('_token', 'accept'));
        $guest->notify(new FormFilledNotification($restaurant, $guest));
        $message = 'filled';
        return view('form_filled', compact('message','guest','restaurant'));
    }

    public function view_form($key)
    {
        $restaurant = Restaurants::whereUniqueKey($key)->firstOrFail();
        return view('corona_form', compact('restaurant'));
    }

    public function contact()
    {
        return view('contact');
    }

}
