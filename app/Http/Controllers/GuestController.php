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
        $guest = GuestInfo::create($request->except('_token'));
        $guest->notify(new FormFilledNotification());
        return view('welcome');
    }

    public function view_form($key)
    {
        $restaurant = Restaurants::whereUniqueKey($key)->firstOrFail();
        return view('corona_form', compact('restaurant'));
    }
}
