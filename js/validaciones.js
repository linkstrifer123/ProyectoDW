function validar(){
      var identificador, nombre, autor1, autor2, autor3, asesor,fecha, nota, linea;
      var  mensajetotal = "";
      var fecha = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
      identificador=document.forms["formulario"]["identificador"].value;
      nombre = document.forms["formulario"]["nombre"].value;
      asesor=document.forms["formulario"]["asesor"].value;
      autor1 = document.forms["formulario"]["autor1"].value;
      //autor2 = document.forms["formulario"]["autor2"].value;
      //autor3 = document.forms["formulario"]["autor3"].value;
      fecha = document.forms["formulario"]["fecha"].value;
      nota = document.forms["formulario"]["nota"].value;
      linea = document.forms["formulario"]["linea"].value;


     if (isNaN(identificador) || identificador<=0 || identificador.length <= 6 ) {
      mensaje.innerHTML = "Digite un identificador ";
       return false;
      }
      else if (nombre == null || nombre.length == 0 || !/^([a-zA-Zàèìòùñ])*$/.test(nombre)) {
        mensaje.innerHTML = "Digite un Nombre Valido ";
        return false;
      }
      else if (autor1 == null || autor1.length == 0 || autor1.length >200) {
        mensaje.innerHTML = "Digite el nombre del autor 1";
        return false;
      }
      else if (asesor == null || asesor.length == 0 || !/^([a-zA-Zàèìòùñ])*$/.test(asesor)) {
        mensaje.innerHTML = "Digite el nombre del asesor";
        return false;
      }
      else if ((fecha.match(fecha))&&(fecha!="")){
        mensaje.innerHTML="Ingrese una fecha";
        return true;

      }else if (isNaN(parseFloat(nota)) || nota<=0 || nota.length <= 0 ) {
      mensaje.innerHTML = "Digite la nota obtenida ";
       return false;
      }
       else if (linea == null || linea.length == 0 || !/^([a-zA-Zàèìòùñ])*$/.test(linea)) {
        mensaje.innerHTML = "Digite el tema de investigacion";
        return false;
      }

    }