@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>@lang('register.titleAU')</h3></div>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <form class="navbar-form navbar-left" role="search" action="/users/filter" method="get">
                <div class="form-group">
                  <select class="form-control" name="filter">
                    @php
                      $attrib = \App\User::SEARCHABLE;
                    @endphp
                    @foreach ($attrib as $key => $value)
                      <option value="{{$value}}">{{$value}}</option>
                    @endforeach
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="value">
                </div>
                <button type="submit" class="btn btn-default">@lang('register.search')</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <th>Id</th>
                <th>@lang('register.name')</th>
                <th>@lang('register.email')</th>
                <th>@lang('register.phone')</th>
                <th>@lang('register.cellphone')</th>
                <th>@lang('register.role')</th>
                <th>@lang('register.status')</th>
              </tr>
              @foreach ($users as $user)
                <tr>
                  <td><a href="{{ url('/users/edit/'.$user->id) }}">{{ $user->id }}</a></td>
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
        </div>
        {{ $users->links() }}
      </div>
    </div>
  </div>

@endsection
