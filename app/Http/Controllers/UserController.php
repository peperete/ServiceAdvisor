<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
  public function users()
  {
      $users = User::paginate(15);
      return view('users', ['users' => $users]);
  }
}
