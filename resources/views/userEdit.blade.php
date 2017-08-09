@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Modificar Usuario</h3></div>
        <form class="" action="" method="post">
            <input type="text" name="name" value="{{ $user->name }}">
            <input type="text" name="email" value="{{ $user->email }}">
            <input type="text" name="phone" value="{{ $user->phone }}">
            <input type="text" name="cellphone" value="{{ $user->cellphone }}">
            <input type="text" name="role" value="{{ $user->role }}">
            <input type="text" name="status" value="{{ $user->status }}">
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
