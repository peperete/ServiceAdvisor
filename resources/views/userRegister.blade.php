
@extends('layouts.app')

@section('content')
<div class="container">
  <p>
    <h3 class="categorias"style="text-align:center"><strong>¡Bienvenido(a)!</strong></h3>

      <div class="col-sm-3"></div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h6 style="color: #FF7557; text-align:center"><img src="images/logoadvisor02.png" class="img-responsive logoregister" alt="logotipo" ></h6>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="categorias" style="text-align:center"><strong>¡REGISTRATE, ES SIMPLE Y GRATIS!</strong></h3>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <!-- <h6 style="text-align:right"><label class="control-label col-sm-12 servicios"for="bienvenida">¿Ya estas registrado? <a href="ingresar.php" target="_self">Entrar</a></label></h6> -->
        <br>
      </div>
      <div class="col-sm-3"></div>

      <!-- <div class="section group"> -->
      <div class="row" style="padding:10px">
        <div class="col-sm-6" style="width:400px; heigth:1000px;background-color:green; margin:5px; border-radius:50px ">
          <h2 style="color:white">Registrarme como Usuario</h2>
          <h5 style="color:white">Recibe presupuestos de los profesionales más confiables para llevar a cabo tus proyectos y mejoras</h5>
          <a href="/register"><button type="button" class="btn btn-primary"name="button">@lang('register.register')</button></a>
        </div>

          <!-- <div class="col span_6_12 left bg-3" style="width:400px; heigth:1000px;background-color:orange"> -->
          <div class="col-sm-6" style="width:400px; heigth:1000px;background-color:orange;margin:5px;border-radius:50px">
            <h2 style="color:white">Registrarme como Usuario</h2>
            <h5 style="color:white">Recibe presupuestos de los profesionales más confiables para llevar a cabo tus proyectos y mejoras</h5>
            <a href="/register"><button type="button" class="btn btn-primary" name="button" style="padding:10px">@lang('register.register')</button></a>
          </div>
      </div>
  <!-- </div> -->

  </p>
</div>

@endsection
