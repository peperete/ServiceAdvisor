window.onload = function(){
  document.getElementById('Err').style.display='none';

    document.getElementById('login').addEventListener('click', function(event){
      var errores = [];
      //alert(errores);
      //event.preventDefault();
      //if(document.getElementById('file-input').value==''){
      //  errores.push("La foto es requerida");
      //}
      if(document.getElementById('name').value==''){
        errores.push("El nombre es requerido");
      }

      if(document.getElementById('phone').value==''){
        errores.push("El Telefono es requerido");
      }
      if(document.getElementById('cellphone').value==''){
        errores.push("El Celular es requerido");
      }
      if(document.getElementById('email').value==''){
        errores.push("El Email es requerido");
      }
      if(document.getElementById('password').value==''){
        errores.push("Debe ingresar una contraseña");
      }
      if(document.getElementById('password-confirm').value==''){
        errores.push("Debe confirmar la contraseña");
      }
      if(document.getElementById('password').value != document.getElementById('password-confirm').value){
        errores.push("las contraseñas son diferentes");
      }

      if(errores.length > 0){
        document.getElementById('Err').innerHTML='';
        document.getElementById('Err').style.display='block';
        errores.forEach(  function(element, index) {
          if(index > 0){
            document.getElementById('Err').appendChild(document.createElement("BR"));
          }
          document.getElementById('Err').appendChild(document.createTextNode(element));
        });

        event.preventDefault();
        return false;
      }else{
        document.getElementById('Err').innerHTML='';
        document.getElementById('Err').style.display='none';
        document.getElementById('formulario').submit();
      }

    });
}
