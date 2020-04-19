<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
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
            'name' => ['required', 'regex:/^[a-zA-Z0-9_]{5,}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'regex:/^[a-zA-Z0-9_$%\-_]{5,}$/', 'confirmed'],
            'phone' => ['required', 'regex:/^\+99\d-\d{2}-\d{7}/'],
            'date_of_birth' => ['required', 'regex:/^\d{2}-\d{2}-\d{4}$/'],
            'postal_code' => ['required', 'regex:/^\d{6}$/'],
            'city' => ['required', 'regex:/^[a-zA-z]*$/'],
            'passport' => ['required' , 'regex:/^(A.)\d{7}/'],

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
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'phone' => $data['phone'],
        //     'date_of_birth' => $data['date_of_birth'],
        //     'postal_code' => $data['postal_code'],
        //     'city' => $data['city'],
        //     'passport' => $data['passport'],
        //     'role_id' => $data['role_id'],
        // ]);
        $role_administrator = Role::where('name', 'administrator')->first();
        $role_customer = Role::where('name', 'customer')->first();
        $user = new User([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'date_of_birth' => $data['date_of_birth'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
            'passport' => $data['passport'],
            'role_id' => $data['role_id'],
        ]);
        $user->save();

        // $role = new Role(['role' => 1]);
        if($data['role_id'] == 2){
        $user->roles()->attach(Role::where('name', 'customer')->first());
        }
        else if($data['role_id'] == 1){
            $user->roles()->attach(Role::where('name', 'administrator')->first());
        }

        // $user->roles()->attach($role_customer);

        return $user;
    }
}
