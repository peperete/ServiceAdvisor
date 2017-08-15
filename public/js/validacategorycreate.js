
window.onload = function(){
   document.getElementById('Err').style.display='none';

    document.getElementById('login').addEventListener('click', function(event){
      var errores = [];

      if(document.getElementById('name').value==''){
        errores.push("El Nombre es Requerido");
      }
      if(document.getElementById('status').value==''){
        errores.push("El Estado es Requerido");
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
