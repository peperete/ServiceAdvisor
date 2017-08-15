@extends('layouts.app')

@section('content')
  <div class="container">
    {{-- Modificación del Perfil Profesional --}}
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Perfil Profesional</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="/professionalProfile/{{ Auth::user()->professionalProfile->id }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            {{-- Invoca al método ProfessionalProfileController@update --}}

            <div class="form-group">
              <label for="businessname" class="col-md-4 control-label">Razón Social</label>
              <div class="col-md-6">
                <input type="text" name="businessname" value="{{ Auth::user()->professionalProfile->businessname }}" class="form-control">
                @if ($errors->has('businessname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('businessname') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-md-4 control-label">@lang('register.email')</label>
              <div class="col-md-6">
                <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="col-md-4 control-label">@lang('register.phone')</label>
              <div class="col-md-6">
                <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
                @if ($errors->has('phone'))
                  <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="cellphone" class="col-md-4 control-label">@lang('register.cellphone')</label>
              <div class="col-md-6">
                <input type="text" name="cellphone" value="{{ Auth::user()->cellphone }}" class="form-control">
                @if ($errors->has('cellphone'))
                  <span class="help-block">
                    <strong>{{ $errors->first('cellphone') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="role" class="col-md-4 control-label">@lang('register.role')</label>
              <div class="col-md-6">
                <input type="text" name="role" value="{{ Auth::user()->role }}" class="form-control">
                @if ($errors->has('role'))
                  <span class="help-block">
                    <strong>{{ $errors->first('role') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="status" class="col-md-4 control-label">@lang('register.status')</label>
              <div class="col-md-6">
                <input type="text" name="status" value="{{ Auth::user()->status }}" class="form-control">
                @if ($errors->has('status'))
                  <span class="help-block">
                    <strong>{{ $errors->first('status') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="photo" class="col-md-4 control-label">Foto de Perfil</label>
              <div class="col-md-6">
                <div class="">
                  @if (Auth::user()->photo)
                    <img src="/storage/{{Auth::user()->photo}}"  width="100px" class="thumbnail miniatura" alt="foto">
                  @else
                    <img src="/images/silueta_foto_perfil.jpg"  width="100px" class="thumbnail miniatura" alt="foto">
                  @endif
                </div>
                <input type="file" name="photo" value="{{ Auth::user()->photo }}" >
              </div>
            </div>

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
