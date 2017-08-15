@extends('layouts.app')

@section('content')
  <div class="container">
    {{-- Creación del Perfil Profesional --}}
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Crear Perfil Profesional</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="/professionalProfile" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- Invoca al método ProfessionalProfileController@store --}}

            <div class="form-group">
              <label for="businessname" class="col-md-4 control-label">Razón Social</label>
              <div class="col-md-6">
                <input type="text" name="businessname" class="form-control">
                @if ($errors->has('businessname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('businessname') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" name="save">
                    @lang('register.save')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
@endsection
