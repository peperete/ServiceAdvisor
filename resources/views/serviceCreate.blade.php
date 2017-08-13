@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Crear Servicio</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST"  action="/services" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="category_id" class="col-md-4 control-label">Categoría</label>
              <div class="col-md-6">
                <input type="integer" name="category_id" class="form-control">
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
                <input type="text" name="photo" class="form-control">
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
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/services" formmethod="GET">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
