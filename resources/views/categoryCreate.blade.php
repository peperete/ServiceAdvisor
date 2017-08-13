@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Crear Categoria</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST"  action="/categories" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.name')</label>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control">
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
                <input type="text" name="status" class="form-control">
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

                <img src="/storage/photos/categories_default.jpg"  id="file-img-input" width="100px" class="thumbnail miniatura" alt="foto">

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
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/categories" formmethod="GET">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
