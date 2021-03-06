<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function users(Request $request)
  {

      $paginate = $request->input('paginate');
      if (is_null($paginate)) {
        $paginate = 15;
      }
      $users = User::paginate($paginate);
      return view('users', ['users' => $users]);
  }

  public function usersFiltered(Request $request)
  {
      $filter = $request->input('filter');
      $value = $request->input('value');
      $paginate = $request->input('paginate');
      if (is_null($value)) {
        $users = User::paginate($paginate);
        return view('users', ['users' => $users]);
      } else {
        $users = \App\User::where($filter,'like', '%'.$value.'%')->paginate($paginate);
        return view('users', ['users' => $users]);
      }
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      // return view ('userCreate');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = Auth::user();
    $this->validate($request, [
      'name' => 'required|string|max:255',
      'phone' => 'required|string|max:255',
      'cellphone' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
    ]);

    if ($request->hasFile('photo')){
        $file = $request->file('photo');
        $path = $file->store('photos', 'public');
        $user->photo = $path;
    }

    $user->name = $request->input('name');
     $user->phone = $request->input('phone');
     $user->cellphone= $request->input('cellphone');
     $user->email = $request->input('email');
    $user->save();
    // var_dump($user); die;
    return  redirect('/');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      // $user = User::where('id', $id)->first();
      $user = User::find($id);
      return view('userEdit', ['user'=>$user]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function save(Request $request, $id)
  {
      $user = User::find($id);
      //var_dump($user); die;
      $this->validate($request, [
      'name' => 'required|string|max:255',
      'phone' => 'required|string|max:255',
      'cellphone' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
      'role' => 'required|string|max:255',
      'status' => 'required|string|max:255',
      // 'password' => 'required|string|min:6|confirmed',
      // 'photo' => 'image|max:255',
    ]
    );
    if ($request->hasFile('photo')){
        $file = $request->file('photo');
        $path = $file->store('photos', 'public');
        $user->photo = $path;
    }

    // $file = $request->file('photo');
    // $path = $file->store('photos', 'public');

    $user->name = $request->input('name');
     $user->phone = $request->input('phone');
     $user->cellphone= $request->input('cellphone');
     $user->email = $request->input('email');
     $user->role = $request->input('role');
    $user->status = $request->input('status');
    // $user->photo = $path;
    // $user->password = $request->input('password');
    $user->save();
    // var_dump($user); die;
    return  redirect('/users');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

}
