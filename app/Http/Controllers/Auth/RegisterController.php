<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'cellphone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'photo' => 'image|max:255',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request, array $data)
    {
      // print_r($request); die;
      // $file = $request->file('photo');
      // $path = $file->store('fotos', 'public');

      $path = '';
      if ($request->hasFile('photo')){
        $file = $request->file('photo');
        $path = $file->store('photos', 'public') ;
      }

      $role = $request->input('role');

      return User::create([
          'name' => $data['name'],
          'phone' => $data['phone'],
          'cellphone' => $data['cellphone'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'photo' => "$path",
          'status' => $data['status'],
          'role' => $role,
      ]);

    }
}
