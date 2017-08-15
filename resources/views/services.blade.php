@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>@lang('register.titleAS')</h3></div>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <form class="navbar-form navbar-left" role="search" action="/services/filter" method="get">
                <div class="form-group">
                  <select class="form-control" name="filter">
                    <option value="name">@lang('register.name')</option>
                    <option value="id">@lang('register.id')</option>
                    <option value="id_category">@lang('register.id_category')</option>
                    <option value="status">@lang('register.status')</option>

                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="value">
                </div>
                <button type="submit" class="btn btn-default">@lang('register.search')</button>
                <button type="submit" formaction="/services/create" class="btn btn-default navbar-btn">@lang('register.create')</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <th>@lang('register.id')</th>
                <th>@lang('register.id_category')</th>
                <th>@lang('register.category')</th>
                <th>@lang('register.name')</th>
                <th>@lang('register.status')</th>
                <th>@lang('register.photo')</th>
              </tr>
              @foreach ($services as $service)
                <tr>
                  <td><a href="{{ url('/services/'.$service->id).'/edit' }}">{{ $service->id }}</a></td>
                  <td>{{ $service->category_id }}</td>
                  <td>{{ $service->category->name }}</td>
                  <td>{{ $service->name }}</td>
                  <td>{{ $service->status }}</td>
                  <td>
                    @if ($service->photo)
                      <img src="/storage/{{$service->photo}}" id="file-img-input"  width="60px" class="thumbnail miniatura" alt="foto">
                  @else
                      <img src="/images/categories_default.jpg"  width="60px" class="thumbnail miniatura" alt="foto">
                  @endif

                  </td>

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
