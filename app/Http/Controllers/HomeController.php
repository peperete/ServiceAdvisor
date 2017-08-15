<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function help()
    {
        return view('help');
    }


    public function userRegister()
    {
        return view('userRegister');
    }

    public function perfilEdit()
    {
        $user = Auth::user();
        if($user) {
          return view('perfilEdit', ['user'=>$user]);
        } else {
          return view('home');
        }
    }


}
