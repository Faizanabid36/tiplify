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
            'firmname' => 'required|max:30|min:3',
            'land' => 'required|max:50|min:3',
            'state' => 'required|max:50|min:3',
            'plz' => 'required|max:10|min:4',
            'ort' => 'required|max:50|min:3',
            'telefon' => 'required|max:16|min:3',
        ]);
        $request->merge(['unique_key' => Keygen::alphanum(6)->generate()]);

        $restaurant = Restaurants::create($request->except('_token'));
        Session::put('resid', $restaurant->id);
        Session::put('firmname', $restaurant->firmname);
        Session::put('land', $restaurant->land);
        Session::put('state', $restaurant->state);
        Session::put('plz', $restaurant->plz);
        Session::put('ort', $restaurant->ort);
        Session::put('telefon', $restaurant->telefon);
        return redirect()->route('register');
    }

    public function edit(Request $request)
    {
        $restaurant = Restaurants::whereId(auth()->user()->restaurant->id)->first();
        return view('edit_restaurant', compact('restaurant'));
    }

    public function update(Request $request)
    {
        Restaurants::whereId(auth()->user()->restaurant->id)->update($request->except('_token'));
        return back()->withSuccess('Updated Successfully');
    }

}
