<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use Session;
use Keygen\Keygen;
class RestaurantController extends Controller
{
    
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $attr=array_merge($request->except('_token'),array("uniqueKey"=>Keygen::alphanum(6)->generate()));
            $restaurant=Restaurants::create($attr);
            Session::put('resid',$restaurant->id);
            return redirect()->route('register');
        }
        else 
        {
            return view('registerRes');
        }
        
    }
}
