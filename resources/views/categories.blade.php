@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>@lang('register.titleAC')</h3></div>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <form class="navbar-form navbar-left" role="search" action="/categories/filter" method="get">
                <div class="form-group">
                  <select class="form-control" name="filter">
                    <option value="name">@lang('register.name')</option>
                    <option value="id">@lang('register.id')</option>
                    <option value="status">@lang('register.status')</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="value">
                  @lang('register.row')
                  <select class="form-control" name="paginate">
                    <option value="5">5</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-default">@lang('register.search')</button>
                <button type="submit" formaction="/categories/create" class="btn btn-default navbar-btn">@lang('register.create')</button>
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
                <th>@lang('register.photo')</th>
              </tr>
              @foreach ($categories as $category)
                <tr>
                  <td><a href="{{ url('/categories/'.$category->id).'/edit' }}">{{ $category->id }}</a></td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->status }}</td>
                  <td>
                    @if ($category->photo)
                        <img src="/storage/{{$category->photo}}" id="file-img-input"  width="100px" class="thumbnail miniatura" alt="foto">
                    @else
                        <img src="/images/categories_default.jpg"  width="100px" class="thumbnail miniatura" alt="foto">
                    @endif
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
        {{ $categories->links() }}
      </div>
    </div>
  </div>

@endsection
