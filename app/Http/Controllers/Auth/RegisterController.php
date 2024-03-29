<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'diplome' => ['required', 'string', 'max:255'],
            'activitepro' => ['required', 'string', 'max:255'],
            'lieutravail' => ['string', 'max:255'],
            'paiement' => ['required', 'string', 'max:255'],
            'photo' => ['required','mimes:jpg,png,jpeg,gif,svg'],
            'fdiplome' => ['required','mimes:pdf'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'specialite' => $data['specialite'],
            'diplome' => $data['diplome'],
            'activitepro' => $data['activitepro'],
            'lieutravail' => $data['lieutravail'],
            'paiement' => $data['paiement'],
            'photo' => $data['photo']->store('public'),
            'fdiplome' => $data['fdiplome']->store('public'),
            'password' => Hash::make($data['password']),
            'approved' => 0,
            'role' => 0,
        ]);
    }
}
