@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Administración de Servicios</h3></div>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <form class="navbar-form navbar-left" role="search" action="/services/filter" method="get">
                <div class="form-group">
                  <select class="form-control" name="filter">
                    <option value="name">Nombre</option>
                    <option value="status">Estado</option>
                    <option value="category_id">Categoría</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="value">
                  Filas
                  <select class="form-control" name="paginate">
                    <option value="5">5</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <button type="submit" formaction="/services/create" class="btn btn-default navbar-btn">Create</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <th>Id</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Foto</th>
              </tr>
              @foreach ($services as $service)
                <tr>
                  <td><a href="{{ url('/services/'.$service->id).'/edit' }}">{{ $service->id }}</a></td>
                  <td>{{ $service->category_id }}</td>
                  <td>{{ $service->name }}</td>
                  <td>{{ $service->status }}</td>
                  <td>{{ $service->photo }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
        {{ $services->links() }}
      </div>
    </div>
  </div>

@endsection
