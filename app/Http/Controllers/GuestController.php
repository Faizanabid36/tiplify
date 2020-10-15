<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\GuestInfo;
class GuestController extends Controller
{
    public function fill(Request $request,string $key)
    {
        $model=Restaurants::where('uniqueKey','=',$key)->firstOrFail();
        if ($request->isMethod('post')) {
            GuestInfo::create($request->except('_token'));
            return view('welcome');
        }
        else
        {
            return view('coronaform',['model'=>$model]);
        }
    }
}
