@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">

      <h1>Esta es la vista de administración de Usuarios</h1>
      <div class="table-responsive">
        <table class="table table-hover">
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Celular</th>
            <th>Rol</th>
            <th>Estado</th>
          </tr>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->cellphone }}</td>
              <td>{{ $user->role }}</td>
              <td>{{ $user->status }}</td>
            </tr>
          @endforeach
        </table>
      </div>
      {{ $users->links() }}
    </div>

  </div>

@endsection
