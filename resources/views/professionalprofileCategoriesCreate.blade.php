@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Asociar Categoría de Servicios Profesionales</h3></div>
        <!---                 errores js   -->
        <div class="alert alert-danger" role="alert" id="Err" style="display:none;"></div>
        <!---                fin errores  js -------------------->
        <div class="panel-body">
          <form class="form-horizontal" method="POST"  action="/professionalprofileCategories" enctype="multipart/form-data" id="formulario">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="category_id" class="col-md-4 control-label">Categoría</label>
              <div class="col-md-6">
                <select class="form-control" name="category_id">
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name}}</option>
                  @endforeach
                </select>
                @if ($errors->has('category_id'))
                  <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <input type="hidden" name="status" value="active">
            <input type="hidden" name="professionalprofile_id" value="{{ $profile->id }}">

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success" name="save" id="login">
                    @lang('register.save')
                </button>
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/professionalprofileCategories" formmethod="GET">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
{{-- <script src="{{ asset('js/validaservicescreate.js') }}"></script> --}}
@endsection
