
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h3 class="categorias"style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive logoregister" alt="logotipo" ></h6>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <h3 class="categorias" style="text-align:center"><strong>¡REGISTRATE, ES SIMPLE Y GRATIS!</strong></h3>
    </div>
  </div>
  <div class="row">
    <form class="form-horizontal" action="/register" method="get">
      <div class="col-xs-4 col-xs-offset-3">
        <button type="submit" class="btn btn-primary" name="role" style="background-color:rgb(112,169,80); color:white; width:200px; text-align:center; vertical-align:middle; line-height: 50px;" value="user">Como Usuario</button>
      </div>
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary" name="role"  style="background-color:rgb(205,109,101); color:white; width:200px; text-align:center; vertical-align:middle; line-height: 50px;" value="professional">Como Profesional</button>
      </div>
    </form>
  </div>
  <p></p>
</div>

@endsection
