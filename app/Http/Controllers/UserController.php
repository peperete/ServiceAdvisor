<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

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
      return view ('userCreate');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
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
  public function update(Request $request, $id)
  {
      //
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
