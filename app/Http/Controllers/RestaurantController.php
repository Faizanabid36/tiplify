<?php

namespace App\Http\Controllers;

use App\Restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Keygen\Keygen;

class RestaurantController extends Controller
{

    public function create(Request $request)
    {
        return view('registerRes');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firmname' => 'required|max:128',
            'land' => 'required|max:128',
            'state' => 'required|max:128',
            'plz' => 'required|max:128',
            'ort' => 'required|max:128',
            'telefon' => 'required|max:64',
        ]);
        $request->merge(['unique_key' => Keygen::alphanum(8)->generate()]);
        $restaurant = Restaurants::create($request->except('_token'));
        Session::put('resid', $restaurant->id);
        return redirect()->route('register');
    }
}
