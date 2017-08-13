@extends('layouts.app')

@section('content')
  <div class="container">
    <p>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Modificar Usuario</h3></div>
        <!-- <form class="" action="" method="post"> -->
          <form class="form-horizontal" method="POST" action="/users/edit/{{ $user->id }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <p>
              <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> -->
                <div class="form-group">
                <label for="name" class="col-md-4 control-label">@lang('register.name')</label>

                <div class="col-md-6">
                    <!-- <input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus> -->
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.email')</label>
                <div class="col-md-6">
                  <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.phone')</label>
                <div class="col-md-6">
                  <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                  @if ($errors->has('phone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

          <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.cellphone')</label>
                <div class="col-md-6">
                  <input type="text" name="cellphone" value="{{ $user->cellphone }}" class="form-control">
                  @if ($errors->has('cellphone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('cellphone') }}</strong>
                      </span>
                  @endif

                </div>
          </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.role')</label>
                <div class="col-md-6">
                  <input type="text" name="role" value="{{ $user->role }}" class="form-control">
                  @if ($errors->has('role'))
                      <span class="help-block">
                          <strong>{{ $errors->first('role') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">@lang('register.status')</label>
                <div class="col-md-6">
                  <input type="text" name="status" value="{{ $user->status }}" class="form-control">
                  @if ($errors->has('status'))
                      <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
                      </span>
                  @endif
                </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-md-4 control-label">Foto de Perfil</label>
                <div class="col-md-6">

                  <div class="">
                  <img src="/storage/{{$user->photo}}"  width="100px" class="thumbnail miniatura" alt="foto">
                  </div>

                  <input type="file" name="photo" value="{{ $user->photo }}" >
                  <!-- @if ($errors->has('status'))
                      <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
                      </span>
                  @endif -->

                </div>

            </div>

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" name="save">
                    @lang('register.save')
                </button>
              </div>
            </div>
            </p>
          </form>
        </div>
      </div>
    </p>
</div>
@endsection
