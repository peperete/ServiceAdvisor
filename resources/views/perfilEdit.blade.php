@extends('layouts.app')

@section('content')
<div class="container">
  <p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('register.title2')</div>
<!---                 errores js   -------------------->
                <div class="alert alert-danger" role="alert" id="Err" style="display:none;"></div>
<!---                 fin errores js   -------------------->
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('userStore') }}" enctype="multipart/form-data" id="formulario">
                        {{ csrf_field() }}

      <!-- Insertar Imagen -->

                    <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                         <!-- <form class="form-horizontal" action="/register" method="post" enctype="multipart/form-data"> -->
                              <div class="form-group">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-md-6">
                                  <div class="">
                                    @if ($user->photo)
                                        <img src="/storage/{{$user->photo}}" id="file-img-input"  width="100px" class="thumbnail miniatura" alt="foto">
                                    @else
                                        <img src="/images/silueta_foto_perfil.jpg" id="file-img-input" width="100px" class="thumbnail miniatura" alt="foto">
                                    @endif
                                  </div>
                                  <input id="file-input" type="file" onchange="readURL(this);" name="photo">

                              </div>

                            </div>
                    </div>
  <!-- fin de Insertar Imagen -->
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <label for="name" class="col-md-4 control-label">@lang('register.name')</label>
                               <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">@lang('register.phone')</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone}}" autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cellphone') ? ' has-error' : '' }}">
                            <label for="cellphone" class="col-md-4 control-label">@lang('register.cellphone')</label>
                        <div class="col-md-6">
                            <input id="cellphone" type="text" class="form-control" name="cellphone" value="{{ $user->cellphone }}" autofocus>

                            @if ($errors->has('cellphone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cellphone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('register.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email}}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <input type="hidden" name="status" value="active">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="bottom" class="btn btn-primary" name="register" id="login">
                                    @lang('register.save')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </p>
</div>
<!-- <script src="{{ asset('js/validaregistro.js') }}"></script> -->
@endsection
