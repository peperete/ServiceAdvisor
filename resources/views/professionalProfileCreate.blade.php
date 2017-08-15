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

            <div class="form-group">
              <label for="doctype" class="col-md-4 control-label">Tipo documento</label>
              <div class="col-md-6">
                <input type="text" name="doctype" class="form-control">
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
                <input type="text" name="docnumber" class="form-control">
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
                <input type="text" name="taxstatus" class="form-control">
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
                <input type="text" name="comercialname" class="form-control">
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
                <input type="text" name="generalinfo" class="form-control">
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
                <input type="text" name="street" class="form-control">
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
                <input type="text" name="number" class="form-control">
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
                <input type="text" name="postalcode" class="form-control">
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
                <input type="text" name="phone" class="form-control">
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
                <input type="text" name="cellphone" class="form-control">
                @if ($errors->has('cellphone'))
                  <span class="help-block">
                    <strong>{{ $errors->first('cellphone') }}</strong>
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
