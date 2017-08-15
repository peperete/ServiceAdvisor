@extends('layouts.app')

@section('content')
  <div class="container">
    <p>
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h3>Modificar Usuario</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="/users/edit/{{ $user->id }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                <label for="name" class="col-md-4 control-label">@lang('register.name')</label>

                <div class="col-md-6">
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-md-4 control-label">@lang('register.email')</label>
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
              <label for="phone" class="col-md-4 control-label">@lang('register.phone')</label>
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
              <label for="cellphone" class="col-md-4 control-label">@lang('register.cellphone')</label>
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
              <label for="role" class="col-md-4 control-label">@lang('register.role')</label>
                <div class="col-md-6">
                  <select class="form-control" name="role">
                    <option value="user"
                      @if ($user->role == "user") selected @endif>
                      Usuario</option>
                    <option value="professional"
                      @if ($user->role == "professional") selected @endif>
                      Profesional</option>
                    <option value="admin"
                      @if ($user->role == "admin") selected @endif>
                      Administrador</option>
                  </select>
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
                  <select class="form-control" name="status">
                    <option value="active"
                      @if ($user->status == "active") selected @endif>
                      Activo</option>
                    <option value="inactive"
                      @if ($user->status == "inactive") selected @endif>
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
              <label for="photo" class="col-md-4 control-label">Foto de Perfil</label>
                <div class="col-md-6">

                  <div class="">
                    @if ($user->photo)
                        <img src="/storage/{{$user->photo}}"  width="100px" class="thumbnail miniatura" alt="foto">
                    @else
                        <img src="/images/silueta_foto_perfil.jpg"  width="100px" class="thumbnail miniatura" alt="foto">
                    @endif
                  </div>

                  <input type="file" name="photo" value="{{ $user->photo }}" >
                </div>
            </div>

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary" name="save">
                    @lang('register.save')
                </button>
                <button type="submit" class="btn btn-default" name="cancel"  formaction="/users" formmethod="get">@lang('register.cancel')
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </p>
</div>
@endsection
