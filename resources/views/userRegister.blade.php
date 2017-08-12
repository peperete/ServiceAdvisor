
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
    <!-- <div class="row"> -->

      <!-- <div class="section group"> -->
      <div class="row" style="">
        <div class="col-sm-2">

        </div>
      <a href="/register">  <div class="col-sm-2" style="width:400px; heigth:1000px;background-color:green; margin:5px; border-radius:20px">
          <h2 style="color:white;text-aling:center;padding:20px">Como Usuario</h2>
          <!-- <h5 style="color:white">Recibe presupuestos de los profesionales más confiables para llevar a cabo tus proyectos y mejoras</h5> -->
          <!-- <a href="/register"><button type="button" class="btn btn-primary"name="button" style="align:center">@lang('register.register')</button></a> -->
        </div></a>

          <!-- <div class="col span_6_12 left bg-3" style="width:400px; heigth:1000px;background-color:orange"> -->
          <a href="#"> <div class="col-sm-2" style="width:400px; heigth:1000px;background-color:#FF7557;margin:5px;border-radius:20px">
            <h2 style="color:white; text-aling:center; padding:20px">Como Profesional</h2>
            <!-- <h5 style="color:white">Creá tu perfil GRATIS y hacé crecer tu negocio</h5> -->
            <!-- <a href="/register"><button type="button" class="btn btn-primary" name="button" style="padding:10px" aling="right">@lang('register.register')</button></a> -->
          </div></a>
      </div>
  <!-- </div> -->

  </p>
</div>

@endsection
