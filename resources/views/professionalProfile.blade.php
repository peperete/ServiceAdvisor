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
              <label for="doctype" class="col-md-4 control-label">Tipo documento</label>
              <div class="col-md-6">
                <input type="text" name="doctype" value="{{ Auth::user()->professionalProfile->doctype }}" class="form-control">
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('doctype') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="docnumber" class="col-md-4 control-label">N° Documento</label>
              <div class="col-md-6">
                <input type="text" name="docnumber" value="{{ Auth::user()->professionalProfile->docnumber }}" class="form-control">
                @if ($errors->has('docnumber'))
                  <span class="help-block">
                    <strong>{{ $errors->first('docnumber') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="taxstatus" class="col-md-4 control-label">Condición Impositiva</label>
              <div class="col-md-6">
                <input type="text" name="taxstatus" value="{{ Auth::user()->professionalProfile->taxstatus }}" class="form-control">
                @if ($errors->has('taxstatus'))
                  <span class="help-block">
                    <strong>{{ $errors->first('taxstatus') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="comercialname" class="col-md-4 control-label">Nombre Comercial</label>
              <div class="col-md-6">
                <input type="text" name="comercialname" value="{{ Auth::user()->professionalProfile->comercialname }}" class="form-control">
                @if ($errors->has('comercialname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('comercialname') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="generalinfo" class="col-md-4 control-label">Información General</label>
              <div class="col-md-6">
                <input type="text" name="generalinfo" value="{{ Auth::user()->professionalProfile->generalinfo }}" class="form-control">
                @if ($errors->has('generalinfo'))
                  <span class="help-block">
                    <strong>{{ $errors->first('generalinfo') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="street" class="col-md-4 control-label">Calle</label>
              <div class="col-md-6">
                <input type="text" name="street" value="{{ Auth::user()->professionalProfile->street }}" class="form-control">
                @if ($errors->has('street'))
                  <span class="help-block">
                    <strong>{{ $errors->first('street') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="number" class="col-md-4 control-label">Número</label>
              <div class="col-md-6">
                <input type="text" name="number" value="{{ Auth::user()->professionalProfile->number }}" class="form-control">
                @if ($errors->has('number'))
                  <span class="help-block">
                    <strong>{{ $errors->first('number') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="postalcode" class="col-md-4 control-label">Código Postal</label>
              <div class="col-md-6">
                <input type="text" name="postalcode" value="{{ Auth::user()->professionalProfile->postalcode }}" class="form-control">
                @if ($errors->has('postalcode'))
                  <span class="help-block">
                    <strong>{{ $errors->first('postalcode') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="col-md-4 control-label">Teléfono</label>
              <div class="col-md-6">
                <input type="text" name="phone" value="{{ Auth::user()->professionalProfile->phone }}" class="form-control">
                @if ($errors->has('phone'))
                  <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="cellphone" class="col-md-4 control-label">Celular</label>
              <div class="col-md-6">
                <input type="text" name="cellphone" value="{{ Auth::user()->professionalProfile->cellphone }}" class="form-control">
                @if ($errors->has('cellphone'))
                  <span class="help-block">
                    <strong>{{ $errors->first('cellphone') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" name="save">
                    @lang('register.save')
                </button>
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/" formmethod="get">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
@endsection
