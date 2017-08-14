@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Modificar Servicios</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST"  action="/services/{{ $service->id }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="form-group">
              <label for="category_id" class="col-md-4 control-label">Categoría</label>
              <div class="col-md-6">
                {{-- <input type="integer" name="category_id" value="{{ $service->category_id }}" class="form-control"> --}}
                <select class="form-control" name="category_id">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                      @if ($service->category_id == $category->id) selected @endif>
                      {{ $category->name}}</option>
                  @endforeach
                </select>
                @if ($errors->has('category_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.name')</label>
              <div class="col-md-6">
                <input type="text" name="name" value="{{ $service->name }}" class="form-control">
                @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="status" class="col-md-4 control-label">@lang('register.status')</label>
              <div class="col-md-6">
                <input type="text" name="status" value="{{ $service->status }}" class="form-control">
                @if ($errors->has('status'))
                  <span class="help-block">
                      <strong>{{ $errors->first('status') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="photo" class="col-md-4 control-label">@lang('register.photo')</label>
              <div class="col-md-6">
                <div class="">
                  @if ($service->photo)
                      <img src="/storage/{{$service->photo}}" id="file-img-input"  width="100px" class="thumbnail miniatura" alt="foto">
                  @else
                      <img src="/images/categories_default.jpg" id="file-img-input" width="100px" class="thumbnail miniatura" alt="foto">
                  @endif
                </div>
                <input id="file-input" type="file" onchange="readURL(this);" name="photo">
                @if ($errors->has('photo'))
                  <span class="help-block">
                      <strong>{{ $errors->first('photo') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success" name="save">
                    @lang('register.save')
                </button>
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/services" formmethod="get">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
