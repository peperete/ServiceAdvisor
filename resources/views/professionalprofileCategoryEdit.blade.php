@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Modificar Categoría de Servicios Profesionales</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST"  action="/professionalprofileCategories/{{ $profCategory->id }}" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="form-group">
              <label for="category_id" class="col-md-4 control-label">Categoría</label>
              <div class="col-md-6">
                <input type="text" value="{{ $profCategory->category->name }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="status" class="col-md-4 control-label">@lang('register.status')</label>
              <div class="col-md-6">
                <select class="form-control" name="status">
                  <option value="active"
                    @if ($profCategory->status == "active") selected @endif>
                    Activo</option>
                  <option value="inactive"
                    @if ($profCategory->status == "inactive") selected @endif>
                    Inactivo</option>
                </select>
                @if ($errors->has('status'))
                  <span class="help-block">
                      <strong>{{ $errors->first('status') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success" name="save">
                    @lang('register.save')
                </button>
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/professionalprofileCategories" formmethod="get">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
