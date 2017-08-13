@extends('layouts.app')

@section('content')
<div class="container">
  <p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('login.title')</div>
<!---                 errores js   -------------------->
                    <div class="alert alert-danger" role="alert" id="Err"></div>
<!---                fin errores  js -------------------->      
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}" id="formulario">
                        {{ csrf_field() }}

<!---                 errores   -------------------->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<!---                 fin errores   -------------------->
                            <label for="email" class="col-md-4 control-label">@lang('login.email')</label>
<!---                 email   -------------------->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!---                 password   -------------------->

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">@lang('login.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!---                 recordarme   -------------------->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>@lang('login.remember')
                                    </label>
                                </div>
                            </div>
                        </div>

<!---                 submit   -------------------->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="buttom" class="btn btn-primary" name="login" id="login">
                                    @lang('login.login')
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}" name="forgot" >
                                    @lang('login.forgot')
                                    <!-- Forgot Your Password? -->
                                </a>
                            </div>
                        </div>
                    </form>
<!---       Fin formulario       -------------------->

                </div>
            </div>
        </div>
    </div>
  </p>
</div>
<script src="{{ asset('js/validaingreso.js') }}"></script>
@endsection
