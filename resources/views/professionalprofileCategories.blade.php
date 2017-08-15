@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Categorías de Servicios Profesionales</h3></div>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <form class="navbar-form navbar-left" action="/professionalprofileCategories/create" method="get">
              {{-- role="search" action="/services/filter" method="get"> --}}
                <div class="form-group">
                  {{-- <select class="form-control" name="filter">
                    <option value="name">@lang('register.name')</option>
                    <option value="id">@lang('register.id')</option>
                    <option value="id_category">@lang('register.id_category')</option>
                    <option value="category">@lang('register.category')</option>
                    <option value="status">@lang('register.status')</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="value"> --}}
                </div>
                <button type="submit" class="btn btn-default">@lang('register.create')</button>
                {{-- <button type="submit" formaction="/professionalprofileCategory/create" class="btn btn-default navbar-btn">@lang('register.create')</button> --}}
              </form>
            </div>
          </div>
        </nav>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <th>@lang('register.id')</th>
                <th>@lang('register.name')</th>
                <th>@lang('register.status')</th>
              </tr>
              @foreach ($categories as $category)
                <tr>
                  <td><a href="{{ url('/professionalprofileCategories/'.$category->id).'/edit' }}">{{ $category->id }}</a></td>
                  <td>{{ $category->category->name }}</td>
                  <td>{{ $category->status }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
        {{-- {{ $categories->links() }} --}}
      </div>
    </div>
  </div>

@endsection
