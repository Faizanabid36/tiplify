<?php

namespace App\Http\Controllers\Auth;

use App\CustomClass\Methods;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Restaurants;
use App\User;
//use BaconQrCode\Encoder\QrCode;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       
        $res = Restaurants::whereId($data['res_id'])->first();
        $filepath = Methods::get_path('/qrcodes/' . $res->unique_key . '.svg');
        if (!file_exists($filepath))
            QrCode::size(200)->format('svg')->generate(route('corona_form.view', $res->unique_key), $filepath);
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'res_id' => $data['res_id'],
            'password' => Hash::make($data['password']),
            'qr_code_path' => asset('/qrcodes/' . $res->unique_key . '.svg')
        ]);
    }

}
