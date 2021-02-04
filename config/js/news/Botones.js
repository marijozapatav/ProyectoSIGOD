  var disponibilidadesAgg=[];

$(document).ready(function() {

   var modulo=document.getElementById("modulo");
   switch(modulo.value){
    case "usuarios":
    document.getElementById("cedula").focus();
    botones();
    break;
    case "login" :
    document.getElementById("cedula").focus();
    botones();
    document.getElementById("mostrar").onclick=function(){Mostrar();}
   
    break;
    case "consulta-usuarios":
    document.getElementById("search-users").focus();
    dynamic_searchs('usuario',document.getElementById("search-users"));
    break;
    case "secciones":
    botones();
    break;
    case "consulta-secciones":
    document.getElementById("search-secciones").focus();
    dynamic_searchs('secciones',document.getElementById("search-secciones"));
        break;
    case "aulas":
    document.getElementById("numero").focus();
    botones();
    newDisponibilidad();
    break;
    case "consulta-aulas":
    document.getElementById("search-aulas").focus();
    dynamic_searchs('aula',document.getElementById("search-aulas"));
    break;
    case "docentes":
    document.getElementById('botonSiguiente').addEventListener("click", Siguiente, false); 
    document.getElementById("cedula").focus();
    var step1=document.getElementById("step-1");
    var step2=document.getElementById("step-2");
    var step3=document.getElementById("step-3");
    var step4=document.getElementById("step-4");

    step1.style.background="#1D6C8F";
    step1.style.borderRadius="0.8em";
    step1.style.mozBorderRaius="0.8em";
    step1.style.color="white";
    step1.style.display="inline-block";
    step1.style.fontWeight="bold";
    step1.style.lineHeight="1.6em";
    step1.style.marginRigth="15px";
    step1.style.width="1.6em";
    step1.style.fontSize="30px";

    step2.style.background="grey";
    step2.style.borderRadius="0.8em";
    step2.style.mozBorderRaius="0.8em";
    step2.style.color="white";
    step2.style.display="inline-block";
    step2.style.fontWeight="bold";
    step2.style.lineHeight="1.6em";
    step2.style.marginRigth="15px";
    step2.style.width="1.6em";
    step2.style.fontSize="30px";

    step3.style.background="grey";
    step3.style.borderRadius="0.8em";
    step3.style.mozBorderRaius="0.8em";
    step3.style.color="white";
    step3.style.display="inline-block";
    step3.style.fontWeight="bold";
    step3.style.lineHeight="1.6em";
    step3.style.marginRigth="15px";
    step3.style.width="1.6em";
    step3.style.fontSize="30px";

    step4.style.background="grey";
    step4.style.borderRadius="0.8em";
    step4.style.mozBorderRaius="0.8em";
    step4.style.color="white";
    step4.style.display="inline-block";
    step4.style.fontWeight="bold";
    step4.style.lineHeight="1.6em";
    step4.style.marginRigth="15px";
    step4.style.width="1.6em";
    step4.style.fontSize="30px";


    break;

    case "consulta-docente":
    document.getElementById("search-docentes").focus();
        dynamic_searchs('docente',document.getElementById("search-docentes"));
    break;
    case "cohorte":
    document.getElementById("nombre").focus();
    botones();
    break;
        case "consultas-cohorte":
    document.getElementById("search-cohorte").focus();
    break;

    case "unidades":
    document.getElementById("unidad").focus();
    botones();
    break;

        case "consulta-unidad":
    document.getElementById("search-unidad").focus();
    break;
   }

   function botones(){
    document.getElementById("guardar").onclick=function(){
      Enviar();
    }    
    document.getElementById("limpiar").onclick=function(){
      limpieza();
    }
   }

   function newDisponibilidad(){
    var boton=document.getElementById("changeDisponibilidad");
    var botonAgregar=document.getElementById("botonAggDispo");
    // var disponibilidadesAgg=[];
    // var nuevasDisponibilidades=[];
    var turno;
    var dia;
   
      boton.onclick=function(){
         if(document.getElementById("numero").value!="" && document.getElementById("nombre").value!="" && document.getElementById("ubicacion").value!=""&&document.getElementById("capacidad").value!=""){
        if(document.getElementById("disponibilidad").style.display=="block"){
          document.getElementById("disponibilidad").style.display="none";
          document.getElementById("select-turno").style.display="block";
          document.getElementById("select-dia").style.display="block";
          boton.innerHTML='<i class="mdi mdi-format-list-bulleted"></i>'; 
        }
        else{
           document.getElementById("disponibilidad").style.display="block";
          document.getElementById("select-turno").style.display="none";
          document.getElementById("select-dia").style.display="none";
          boton.innerHTML='<i class="mdi mdi-plus-box"></i>'; 
        }
      }

            else{
      Enviar();
    }
    }

    botonAgregar.onclick=function(){
       if(document.getElementById("numero").value!="" && document.getElementById("nombre").value!="" && document.getElementById("ubicacion").value!=""&&document.getElementById("capacidad").value!=""){
       if(document.getElementById("disponibilidad").style.display=="block"){
           if(document.getElementById("disponibilidad").value==0){
            document.getElementById("validDisponibilidad").innerHTML="Seleccione una disponibilidad";
           }
           else{
            document.getElementById("validDisponibilidad").innerHTML="";
             disponibilidadesAgg.push(document.getElementById("disponibilidad").value);

             var tabla=document.createElement("table");
             tabla.style.width="100%";
             var tr=document.createElement("tr");
             var td=document.createElement("td");
             td.style.width="100%";
             td.style.textAlign="center";
             var h3=document.createElement("h3");
             var text=document.createTextNode(document.getElementById("disponibilidad").options[document.getElementById("disponibilidad").selectedIndex].text);
             var val=document.getElementById("disponibilidad").value;
             h3.appendChild(text);
             td.appendChild(h3);
             var td2=document.createElement("td");
             td2.style.width="100%";
             td2.style.textAlign="center";
             var boton=document.createElement("input");
             boton.type="button";
             boton.className="btn btn-danger";
             boton.value="X";
             td2.appendChild(boton);
             tr.appendChild(td);
             tr.appendChild(td2);
             tabla.appendChild(tr);
             document.getElementById("disponibilidadesAgregadas").appendChild(tabla);

             boton.onclick=function(){
            document.getElementById("disponibilidadesAgregadas").removeChild(tabla);
            disponibilidadesAgg.splice(disponibilidadesAgg.indexOf(val),1);
              }

           }
       }
       else{
        if(document.getElementById("select-turno").value==0){
          document.getElementById("validDisponibilidad").innerHTML="Seleccione el turno disponible";
        }
        else{
           document.getElementById("validDisponibilidad").innerHTML="";
           if(document.getElementById("select-dia").value==0){
             document.getElementById("validDisponibilidad").innerHTML="Seleccione el día disponible";
           }
           else{
             document.getElementById("validDisponibilidad").innerHTML="";
             switch(document.getElementById("select-turno").value){
              case '1':
                 turno="Mañana";
                break;
              case '2':
               turno="Tarde";
              break;
              case '3':
               turno ="Noche";
              break;  
             }

             switch(document.getElementById("select-dia").value){
              case '1':
                 dia="Lunes";
                break;
              case '2':
               dia="Martes";
              break;
              case '3':
               dia ="Miércoles";
              break;
              case '4':
               dia="Jueves";
              break;
              case '5':
               dia="Viernes";
              break;
              case '6':
               dia="Sábado";
              break;  
             }

             var disponibilidadNueva=dia+" ("+turno+") ";



              $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/aula/AggDisponibilidad',
             data:{"nombre_disponibilidad":disponibilidadNueva,"turno":document.getElementById("select-turno").value,"dia":document.getElementById("select-dia").value},
     })
           .done(function(datos){
            if(datos!=0){
      
             var tabla=document.createElement("table");
             tabla.style.width="100%";
             var tr=document.createElement("tr");
             var td=document.createElement("td");
             td.style.width="100%";
             td.style.textAlign="center";
             var h3=document.createElement("h3");
             var val=datos;
             h3.innerHTML=disponibilidadNueva;
             td.appendChild(h3);
             var td2=document.createElement("td");
             td2.style.width="100%";
             td2.style.textAlign="center";
             var boton=document.createElement("input");
             boton.type="button";
             boton.className="btn btn-danger";
             boton.value="X";
             td2.appendChild(boton);
             tr.appendChild(td);
             tr.appendChild(td2);
             tabla.appendChild(tr);
             document.getElementById("disponibilidadesAgregadas").appendChild(tabla);

             boton.onclick=function(){
            document.getElementById("disponibilidadesAgregadas").removeChild(tabla);
            disponibilidadesAgg.splice(disponibilidadesAgg.indexOf(val),1);

              }
            }
           });

           }
        }
       }
    }
    else
    {
      Enviar();
    }
  }

   }


   function limpieza(){

    document.getElementById("formulario").reset();
    switch(modulo.value){
      case "login":
document.getElementById("mensajeCedula").innerHTML="";
document.getElementById("mensajeClave").innerHTML="";
document.getElementById("cedula").focus();
      break;
      
      case "usuarios":
document.getElementById("mensajeCedula").style.color="white";
document.getElementById("mensajeNombre").style.color="white";
document.getElementById("mensajeApellido").style.color="white";
document.getElementById("mensajeCorreo").style.color="white";
document.getElementById("mensajeFecha").style.color="white";
document.getElementById("mensajeContrasenia").style.color="white";
document.getElementById("mensajeConfirmar").style.color="white";
document.getElementById("mensajeDosContra").style.color="white";
document.getElementById("mensajeRol").style.color="white"; 
document.getElementById("cedula").focus();
      break;

      case "secciones":
document.getElementById("msjTrayecto").innerHTML="";
document.getElementById("msjSeccion").innerHTML="";
      break;

      case "aulas":
document.getElementById("msjNroAula").innerHTML="";
document.getElementById("msjAula").innerHTML="";
document.getElementById("msjUbicacion").innerHTML="";
document.getElementById("msjCapacidad").innerHTML="";
document.getElementById("numero").focus();
      break;
    }
 }





});



function Mostrar() {

    var ver;
    ver = document.getElementById("password");
    if (ver.type === "password") {
        ver.type = "text";
        ver.focus();
    } else {
        ver.type = "password";
    ver.focus();
    
}
}


     $(document).keypress(function(e) {

       if(e.which == 13  || e.keyCode==13) {
        if(document.getElementById("modulo").value!="docentes"){

          Enviar();
          return false;
        }else{

         Siguiente();
         return false;
        }
          
        }
       else{return true;}

});

function Enviar(){
var cont;  
switch (modulo.value){
    case "usuarios":
        var cedula=document.getElementById("cedula");
        var nombre=document.getElementById("nombre");
        var apellido=document.getElementById("apellido");
        var correo=document.getElementById("correo");
        var fecha_n=document.getElementById("fecha_n");
        var contrasenia=document.getElementById("contrasenia");
        var confirmar=document.getElementById("confirmar");
        var rol=document.getElementById("rol");


        
        if(cedula.value==""){
              cont=1;
               document.getElementById("mensajeCedula").innerHTML="El campo cédula se encuentra vacío";
                document.getElementById("mensajeCedula").style.color="red";
            cedula.focus();
            
        }
        else if (cedula.value!="") {

             $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/usuario/BuscarExistenteAjax',
             data:{'cedula':$("#cedula").val(),'modulo':$("#modulo").val()},
     })
           .done(function(datos){
            
            if(datos!=0){
           
                 document.getElementById("mensajeCedula").innerHTML="Este usuario ya está registrado";
                 document.getElementById("mensajeCedula").style.color="red";
             document.getElementById("cedula").focus();
             cont=1;
         
             }
             else{

                document.getElementById("mensajeCedula").style.color="white";
                document.getElementById("mensajeCedula").innerHTML="El campo cédula se encuentra vacío";
                cont=0;
                         if(nombre.value==""){

            if(cont==0){ 
            cont=1;
            document.getElementById("mensajeNombre").style.color="red";
            nombre.focus();
            }
        }
        else if (nombre.value!="") {
            cont=0;
            
            document.getElementById("mensajeNombre").style.color="white";
        }

         if(apellido.value==""){
            if(cont==0){
                cont=1; 
            document.getElementById("mensajeApellido").style.color="red";
            apellido.focus();
            }
        }
        else if (apellido.value!="") {
            cont=0;
            document.getElementById("mensajeApellido").style.color="white";
        }
         if(correo.value==""){
             if(cont==0){
            cont=1;
                document.getElementById("mensajeCorreo").style.color="red";
            correo.focus();
             }
        }
        else if (correo.value!="") {
            cont=0;
            document.getElementById("mensajeCorreo").style.color="white";
        }
         if(fecha_n.value==""){
             if(cont==0){
            cont=1;
                document.getElementById("mensajeFecha").style.color="red";
            fecha_n.focus();
             }
        }
        else if (fecha_n.value!="") {
            cont=0;
            document.getElementById("mensajeFecha").style.color="white";

        }
         if(contrasenia.value==""){
          if(cont==0){
          cont=1;
            document.getElementById("mensajeContrasenia").style.color="red";
            contrasenia.focus();
          }
        }
        else if (contrasenia.value!="") {
            cont=0;
            document.getElementById("mensajeContrasenia").style.color="white";
        }
         if(confirmar.value==""){
           if(cont==0){          
           cont=1;
            document.getElementById("mensajeConfirmar").style.color="red";
            confirmar.focus();
           }
        }
        else if (confirmar.value!="") {
            cont=0;
            document.getElementById("mensajeConfirmar").style.color="white";
        }
         if(contrasenia.value!=confirmar.value){
            if(cont==0){
                cont=1;
            document.getElementById("mensajeDosContra").style.color="red";
            confirmar.focus();
            }
        }
        else if (contrasenia.value==confirmar.value) {
            cont=0;
            document.getElementById("mensajeDosContra").style.color="white";
        }
        
       
            if(rol.value==0){


          
               if(cedula.value!="" && nombre.value!="" && apellido.value!="" && correo.value!="" && fecha_n.value!="" && contrasenia.value!="" && confirmar.value!="" && contrasenia.value==confirmar.value){
                    document.getElementById("mensajeRol").style.color="red";  
                     confirmar.blur(); }
                
}
else{


             document.getElementById("mensajeRol").style.color="white"; 
             document.getElementById("formulario").submit();

                
}

             }
         })
         

        }

            break;

            case "login":
            var cedula=document.getElementById("cedula");
            var clave=document.getElementById("password");

            if(cedula.value==""){
                 document.getElementById("mensajeCedula").innerHTML="Debe ingresar su cédula";
                cedula.focus();
            }
            else {
                 document.getElementById("mensajeCedula").innerHTML="";
              if(clave.value==""){
                document.getElementById("mensajeClave").innerHTML="Debe ingresar su contraseña";
                  clave.focus();
              }
              else{
                document.getElementById("mensajeClave").innerHTML="";
 
               $.ajax({
               type:'POST',
               url:'http://localhost/dashboard/www/System%20HOD%20V2/usuario/BuscarExistenteAjax',
              data:{'cedula':$("#cedula").val(),'clave':$("#password").val()},
      })
            .done(function(datos){

             if(datos==0){
           
                  document.getElementById("mensajeCedula").innerHTML="Este usuario no se encuentra registrado";
              document.getElementById("cedula").focus();
         
              }
              else{
                if(datos==1){
            clave.blur();
            document.getElementById("mensajeCedula").innerHTML="";
          document.getElementById("formulario").submit();             
                }
                else{
        document.getElementById("mensajeClave").innerHTML=datos;
                  document.getElementById("mensajeClave").style.color="red";
              document.getElementById("password").focus();
                }
             
              }
})

              }
            }


            break;

            case "secciones":
            var trayecto=document.getElementById("trayecto");
            var seccionName=document.getElementById("nombre");

            if(trayecto.value==0){
              document.getElementById("msjTrayecto").innerHTML="Debe seleccionar un trayecto";
            }
            else{
              document.getElementById("msjTrayecto").innerHTML="";
              if(seccionName.value==""){
                document.getElementById("msjSeccion").innerHTML="Ingrese el código de la sección";
                seccionName.focus();
              }
              else{
                document.getElementById("msjSeccion").innerHTML="";

              $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/secciones/BuscarExistenteAjax',
             data:{'seccion':seccionName.value, 'trayecto':trayecto.value},
     })
                   .done(function(datos){

             if(datos==0){
             document.getElementById("formulario").submit();
              }
              else{
                document.getElementById("msjSeccion").innerHTML=datos;
                seccionName.focus();
              }

})

              
              }
            }
            break;

             case "aulas":
             var nro=document.getElementById("numero");
             var validNro=document.getElementById("msjNroAula");

             var aula=document.getElementById("nombre");
             validAula=document.getElementById("msjAula");

             var ubicacion= document.getElementById("ubicacion");
             var validUbicacion=document.getElementById("msjUbicacion");

             var asignacion= document.getElementById("asignacion");
             var validAsignacion=document.getElementById("msjAsignacion");

             var capacidad=document.getElementById("capacidad");
             var validCapacidad=document.getElementById("msjCapacidad");

             if(nro.value==""){
               validNro.innerHTML="Ingrese el número del aula";
               nro.focus();
             }
             else{
              validNro.innerHTML="";
              if(aula.value==""){
               validAula.innerHTML="Ingrese el nombre del aula";
               aula.focus();
              }
              else{
              validAula.innerHTML=""; 
              if(ubicacion.value==""){
               validUbicacion.innerHTML="Ingrese la ubicación del aula";
               ubicacion.focus();
              }
              else{
               validUbicacion.innerHTML="";
               if(asignacion.value==""){
                msjAsignacion.innerHTML="Ingrese la asignación del aula";
                asignacion.focus();
               }
               else{
                msjAsignacion.innerHTML="";
               if(capacidad.value==""){
                 validCapacidad.innerHTML="Ingrese la capacidad del aula";
                 capacidad.focus();
               }
               else{
                 validCapacidad.innerHTML="";
                 capacidad.blur();
                 if(document.getElementById("disponibilidadesAgregadas").textContent==""){
                    document.getElementById("validDisponibilidad").innerHTML="Debe agregar la  disponibilidad del aula";
                 }
                 else{
                  document.getElementById("validDisponibilidad").innerHTML="";
                  var aulacompleta=new Object();
                  aulacompleta['nroAula']=nro.value;
                  aulacompleta['nombreAula']=aula.value;
                  aulacompleta['ubicacion']=ubicacion.value;
                  aulacompleta['asignacion']=asignacion.value;
                  aulacompleta['capacidad']=capacidad.value;
               $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/aula/GuardarAjax',
             data:{'aula':aulacompleta, "disponibilidades":disponibilidadesAgg
           },
     })
                   .done(function(datos){ 
                    if(datos==1){
                     swal({
                    title: "Éxito",
                    text: "El aula "+aulacompleta['nombreAula']+" ha sido guardada en la base de datos",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });
                    document.getElementById("formulario").submit();
                    }
                    else {
                      alert(datos);
                    }
                   });
                 }
               }
             }
              }
            }
             }

             break;

             case "cohorte":
             var nombreCohorte=document.getElementById("nombre");
             var fechaCohorte=document.getElementById("fecha");
             var descripcion=document.getElementById("descripcion");
             var msjNombre=document.getElementById("validNombreCohorte");
             var msjFecha=document.getElementById("validFechaCohorte");
             var msjDescripcion=document.getElementById("validDescripcionCohorte");

             if(nombreCohorte.value==""){
              msjNombre.innerHTML="Por favor ingrese el nombre del cohorte";
              nombreCohorte.focus();
             }
             else{
              msjNombre.innerHTML="";
              if(fechaCohorte.value==""){
                msjFecha.innerHTML="Por favor ingrese una fecha";
                fechaCohorte.focus();
              }
              else{
                msjFecha.innerHTML="";
                if(descripcion.value==""){
                msjDescripcion.innerHTML="Por favor ingrese una descripción para el cohorte";
                descripcion.focus();
              }
                else{
                  msjDescripcion.innerHTML="";
                  document.getElementById("formulario").submit();
                }
              }
             }
             break;

             case "unidades":
             var unidad=document.getElementById("unidad");
             var trayecto=document.getElementById("Trayecto");
             var fase=document.getElementById("fase");
             var horas=document.getElementById("horas");
             var eje=document.getElementById("eje");
             var msjUnidad=document.getElementById("validNombreUnidad");
             var msjTrayecto=document.getElementById("validTrayectoUnidad");
             var msjFase=document.getElementById("validFaseUnidad");
             var msjHoras=document.getElementById("validHorasUnidad");
             var msjEje=document.getElementById("validEjeUnidad");

             if(unidad.value==""){
              msjUnidad.innerHTML="Por favor ingrese el nombre de la unidad curricular";
              unidad.focus();
             }
             else{
              msjUnidad.innerHTML="";
              unidad.blur();
              if(trayecto.value==0){
                msjTrayecto.innerHTML="Debe seleccionar el trayecto de la unidad curricular";
              }
              else{
                msjTrayecto.innerHTML="";
                if(fase.value==0){
                  msjFase.innerHTML="Seleccione la fase de la unidad curricular";
                }else{
                  msjFase.innerHTML="";
                  if(horas.value==""){
                    msjHoras.innerHTML="Debe indicar la cantidad de horas de la unidad curricular";
                    horas.focus();
                  }
                  else{
                    msjHoras.innerHTML="";
                    horas.blur();
                    if(eje.value==0){
                      msjEje.innerHTML="Seleccione el eje de formación de la unidad curricular";
                    }
                    else{
                      msjEje.innerHTML="";
                      document.getElementById("formulario").submit();
                    }
                  }
                }
              }
             }
             break;
        }
      
    }

    function Siguiente(){
     var step1=document.getElementById("stepN1");
     var step2=document.getElementById("stepN2");
     var step3=document.getElementById("stepN3");
     var step4=document.getElementById("stepN4");

     var nro1=document.getElementById("step-1");
     var nro2=document.getElementById("step-2");
     var nro3=document.getElementById("step-3");
     var nro4=document.getElementById("step-4");

     var lineas1=document.getElementById("lineas1");
     var lineas2=document.getElementById("lineas2");
     var lineas3=document.getElementById("lineas3");

     var anterior=document.getElementById("botonAnterior");
     var guardar=document.getElementById("enviar");
     var titulos=document.getElementById("boton");

     var cedula=document.getElementById("cedula");
     var n1=document.getElementById("nombre1");
     var n2=document.getElementById("segnombre");
     var ap1=document.getElementById("apellido1");
     var ap2=document.getElementById("apellido2");

     var msjCedula=document.getElementById("validCedula");
     var msjNombre1=document.getElementById("validNombre1");
     var msjNombre2=document.getElementById("validNombre2");
     var msjAp1=document.getElementById("validAp1");
     var msjAp2=document.getElementById("validAp2");

     var correo=document.getElementById("correo");
     var telefono=document.getElementById("telefono");
     var direccion=document.getElementById("direccion");
     var municipio=document.getElementById("municipio");

     var msjCorreo=document.getElementById("validCorreo");
     var msjTlf=document.getElementById("validTlf");
     var msjDireccion=document.getElementById("validDireccion");
     var msjMunicipio=document.getElementById("validMunicipio");

     var categoria=document.getElementById("categoria");
     var dedicacion=document.getElementById("dedicacion");
     var relacionLaboral=document.getElementById("relacion");
     var concurso=document.getElementById("concurso");
     var areas=document.getElementById("areas");

     var msjCategoria=document.getElementById("validCategoria");
     var msjDedicacion=document.getElementById("validDedicacion");
     var msjRelacion=document.getElementById("validRelacion");
     var msjConcurso=document.getElementById("validConcurso");
     var msjAreas=document.getElementById("validAreas");

    var fecha=document.getElementById("fecha");
    var traslado=document.getElementById("traslado");
    var experiencia=document.getElementById("experiencia");

    var msjFecha=document.getElementById("validFecha");
    var msjTraslado=document.getElementById("validTraslado");
    var msjExperiencia=document.getElementById("validExperiencia");

    var pregrado=document.getElementById("pregrado");
    var msjPregrado=document.getElementById("validPregrado");
    


     if(cedula.value==""){
      msjCedula.innerHTML="El campo cedula se encuentra vacío";
      cedula.focus();
     }
     else{
      msjCedula.innerHTML="";
               $.ajax({
               type:'POST',
               url:'http://localhost/dashboard/www/System%20HOD%20V2/docente/BuscarExistenteAjax',
              data:{'cedula':cedula.value},
      })
               .done(function(datos){
                     if (datos!=0){
                      msjCedula.innerHTML=datos;
                      cedula.focus();
                     }
                     else{
                    if(n1.value==""){
                      msjNombre1.innerHTML="Por favor ingrese el primer nombre del docente";
                      n1.focus();
                     }
                     else{
                      msjNombre1.innerHTML="";
                      if(n2.value==""){
                        msjNombre2.innerHTML="Por favor ingrese el segundo nombre del docente";
                        n2.focus();
                      }
                      else{
                        msjNombre2.innerHTML="";
                        if(ap1.value==""){
                          msjAp1.innerHTML="Por favor ingrese el primer apellido del docente";
                          ap1.focus();
                        }
                        else{
                          msjAp1.innerHTML="";
                          if(ap2.value==""){
                            msjAp2.innerHTML="Por favor ingrese el segundo apellido del docente";
                            ap2.focus();
                          }
                          else{
                            msjAp2.innerHTML="";
                                          step1.style.display="none";
              step2.style.display="block";
              nro1.style.background="#40A8D6";
              nro2.style.background="#1D6C8F";
              lineas1.style.color="#40A8D6";
              anterior.style.display="block";

              anterior.onclick=function(){
                 if(step1.style.display=="none"){
                  if(step2.style.display=="block"){
              step1.style.display="block";
              nro1.style.background="#1D6C8F";
              nro2.style.background="#40A8D6";
              step2.style.display="none";
              anterior.style.display="none";
                  }
                  else{
                    if(step3.style.display=="block"){
              step2.style.display="block";
               nro2.style.background="#1D6C8F";
                nro3.style.background="#40A8D6";
                 nro1.style.background="#40A8D6";
              step3.style.display="none";
                    }
                    else{
                      if(step4.style.display=="block"){
                        document.getElementById("botonSiguiente").style.display="block";
                        guardar.style.display="none";
             step3.style.display="block";
             nro3.style.background="#1D6C8F";
              nro4.style.background="#40A8D6";
              step4.style.display="none";
                      }
                    }
                  }
                 }
              }
                            if(correo.value==""){
                              if(correo===document.activeElement){
                                msjCorreo.innerHTML="Debe ingresar el correo del docente";
                                correo.focus();
                              }
                              else{
                                correo.focus();
                              }
                            }
                            else{
                              msjCorreo.innerHTML="";
                              if(telefono.value==""){
                                msjTlf.innerHTML="Ingrese el número de teléfono del docente";
                                telefono.focus();
                              }
                              else{
                                msjTlf.innerHTML="";
                                if(direccion.value==""){
                                  msjDireccion.innerHTML="Por favor ingrese la dirección del docente";
                                  direccion.focus();
                                }
                                else{
                                  msjDireccion.innerHTML="";
                                  direccion.blur();
                                  if(municipio.value==0){
                                    msjMunicipio.innerHTML="Seleccione el municipio del docente";
                                  }
                                  else{
                                    msjMunicipio.innerHTML="";
                                    step2.style.display="none";
                                    step3.style.display="block";
                                    nro3.style.background="#1D6C8F";
                                    nro2.style.background="#40A8D6";
                                    lineas2.style.color="#40A8D6";
                                    var infoDocente=new Object();
                                    infoDocente['cedula']=cedula.value;
                                    infoDocente['nombre1']=n1.value;
                                    infoDocente['nombre2']=n2.value;
                                    infoDocente['apellido1']=ap1.value;
                                    infoDocente['apellido2']=ap2.value;
                                    infoDocente['correo']=correo.value;
                                    infoDocente['telefono']=telefono.value;
                                    infoDocente['direccion']=direccion.value;
                                    infoDocente['municipio']=municipio.value;

                                    if(categoria.value==0){
                                      if(msjCategoria.style.color=="blue"){
                                      msjCategoria.style.color="white";
                                      msjCategoria.innerHTML="Seleccione la categoría del docente";
                                    }
                                    else{
                                      msjCategoria.style.color="red";
                                    }
                                    }
                                    else{
                                      msjCategoria.innerHTML="";
                                      if(dedicacion.value==0){
                                        msjDedicacion.innerHTML="Seleccione la dedicación del docente";
                                      }
                                      else{
                                        msjDedicacion.innerHTML="";
                                        if(relacionLaboral.value==0){
                                          msjRelacion.innerHTML="Seleccione la relación laboral del docente";
                                        }
                                        else{
                                          msjRelacion.innerHTML="";
                                          if(concurso.value==0){
                                            msjConcurso.innerHTML="";
                                          }
                                          else{
                                            msjConcurso.innerHTML="";
                                            if(areas.value==0){
                                              msjAreas.innerHTML="Seleccione el área del docente";
                                            }
                                            else{
                                              msjAreas.innerHTML="";
                                              infoDocente['categoria']=categoria.value;
                                              infoDocente['dedicacion']=dedicacion.value;
                                              infoDocente['relacionL']=relacionLaboral.value;
                                              infoDocente['concurso']=concurso.value;
                                              infoDocente['areas']=areas.value;

                                             document.getElementById('botonSiguiente').style.display="none";
                                             guardar.style.display="block";
                                             step3.style.display="none";
                                             step4.style.display="block";
                                             nro4.style.background="#1D6C8F";
                                             nro3.style.background="#40A8D6";
                                             lineas3.style.color="#40A8D6";
                                             var titulosAgregados=[];
                                             var ingreso=new Object();  
                                           
                                             titulos.onclick=function(){
                                               if(fecha.value!="" && traslado.value!="" && experiencia.value!=0){
                                                   msjExperiencia.innerHTML="";
                                                 if(document.getElementById("titulos").value==0){
                                                   document.getElementById("validTitulos").innerHTML="Debe seleccionar un título para agregarlo";
                                                 }
                                                 else{
                                                   document.getElementById("validTitulos").innerHTML="";
                                                   titulosAgregados.push(document.getElementById("titulos").value);
                                                   var tabla=document.createElement("table");
                                                   tabla.style.width="100%";
                                                   var tr=document.createElement("tr");
                                                   var td=document.createElement("td");
                                                   td.style.width="100%";
                                                   td.style.textAlign="center";
                                                   var h3=document.createElement("h3");
                                                   var text=document.createTextNode(document.getElementById("titulos").options[document.getElementById("titulos").selectedIndex].text);
                                                   var val=document.getElementById("titulos").value;
                                                   h3.appendChild(text);
                                                   td.appendChild(h3);
                                                   var td2=document.createElement("td");
                                                   td2.style.width="100%";
                                                   td2.style.textAlign="center";
                                                   var boton=document.createElement("input");
                                                   boton.type="button";
                                                   boton.className="btn btn-danger";
                                                   boton.value="X";
                                                   td2.appendChild(boton);
                                                   tr.appendChild(td);
                                                   tr.appendChild(td2);
                                                   var tr2=document.createElement("tr");
                                                   var td3=document.createElement("td");
                                                   var textArea=document.createElement("textArea");
                                                   textArea.placeholder="Descripción del título";                  
                                                   td3.colspan=2;
                                                   td3.appendChild(textArea);
                                                   tr2.appendChild(td3);
                                                   tabla.appendChild(tr);
                                                   tabla.appendChild(tr2);
                                                   document.getElementById("titulosAgregados").appendChild(tabla);
                                                   boton.onclick=function(){
                                                      document.getElementById("titulosAgregados").removeChild(tabla);
                                                      titulosAgregados.splice(titulosAgregados.indexOf(val),1);
                                                   }
                                                 }
                                               }
                                             }  
                   $(document).keypress(function(e) {

       if(e.which == 13  || e.keyCode==13) {
               if(fecha.value==""){
                  msjFecha.innerHTML="Por favor ingrese la fecha de ingreso";
                  fecha.focus();
                }
                else{
                  msjFecha.innerHTML="";
                  if(traslado.value==""){
                    msjTraslado.innerHTML="Ingrese el traslado del docente";
                    traslado.focus();
                  }
                  else{
                    msjTraslado.innerHTML="";
                    traslado.blur();
                    fecha.blur();
                    if(experiencia.value==0){
                      msjExperiencia.innerHTML="Seleccione la experiencia del docente";
                    }
                    else{
                      msjExperiencia.innerHTML="";
                    
                    if(pregrado.value==""){
                      msjPregrado.innerHTML="Ingrese el título de pregrado del docente";
                      pregrado.focus();
                    }
                    else{
                   msjPregrado.innerHTML="";
                   ingreso['fecha']=fecha.value;
                   ingreso['traslado']=traslado.value;
                   ingreso['experiencia']=experiencia.value;
                   infoDocente['pregrado']=pregrado.value;



       if(titulosAgregados.length==0){


          swal({
        title: "No se ha agregado ningún título adicional al docente",
        text: "¿Estás seguro de continuar?",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "blue",
        confirmButtonText: "Continuar",
        closeOnConfirm: false
        },
        function (isConfirm) {
            if(isConfirm){

                swal({
                    title: "Éxito",
                    text: "El docente"+infoDocente['nombre1']+" "+infoDocente['apellido1']+" ha sido guardado en la base de datos",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });
              GuardarAjaxDocentes(infoDocente,ingreso,titulosAgregados);
    
            }else{
                
            }
        });
        }
        else{
 GuardarAjaxDocentes(infoDocente,ingreso,titulosAgregados);
        }
                    }
                  }
                  }
                }
                return false;
          
        }
       else{return true;}

});       

             guardar.onclick=function(){
               if(fecha.value==""){
                 msjFecha.innerHTML="Por favor ingrese la fecha de ingreso";
                 fecha.focus();
               }
               else{
                 msjFecha.innerHTML="";
                 if(traslado.value==""){
                   msjTraslado.innerHTML="Ingrese el traslado del docente";
                   traslado.focus();
                 }
                 else{
                   msjTraslado.innerHTML="";
                   traslado.blur();
                   if(experiencia.value==0){
                     msjExperiencia.innerHTML="Seleccione la experiencia del docente";
                   }
                   else{
                     msjExperiencia.innerHTML="";

                     if(pregrado.value==""){
                      msjPregrado.innerHTML="Ingrese el título de pregrado del docente";
                      pregrado.focus();
                     }
                     else{
                      msjPregrado.innerHTML="";
                  infoDocente['pregrado']=pregrado.value;
                  ingreso['fecha']=fecha.value;
                  ingreso['traslado']=traslado.value;
                  ingreso['experiencia']=experiencia.value;

        if(titulosAgregados.length==0){

         swal({
       title: "No se ha agregado ningún título adicional al docente",
       text: "¿Estás seguro de continuar?",
       type: "warning",
       showCancelButton: true,
       cancelButtonText: "Cancelar",
       confirmButtonColor: "blue",
       confirmButtonText: "Continuar",
       closeOnConfirm: false
       },
       function (isConfirm) {
           if(isConfirm){


        GuardarAjaxDocentes(infoDocente,ingreso,titulosAgregados);

           }else{
                
           }
       });
       }else{
         GuardarAjaxDocentes(infoDocente,ingreso,titulosAgregados);
       }
                   }
                 }
                 }
               }
             }                                                                             
                                            }
                                          }
                                        }
                                      }
                                    }

                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                     }
                    }
               })

     }
    }


    function GuardarAjaxDocentes(docente,ingreso,titulos){
           var doc=docente;
           var ing=ingreso;
           var tit=titulos;
           if(tit.length==0){
            tit="";
           }

              $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/docente/GuardarAjax',
             data:{'docente':doc, 'ingreso':ing, "titulos":tit
           },
     })
                   .done(function(datos){

                  if(datos==1){
                                    swal({
                    title: "Éxito",
                    text: "El docente "+doc['nombre1']+" "+doc['apellido1']+" ha sido guardado en la base de datos",
                    type: "success",
                    showConfirmButton:false,
                    timer:2000
                });
                    document.getElementById("formulario").submit();
                  }

})
    }


    function dynamic_searchs(tabla,input){
      input.onkeyup=function(){
        if(input.value==""){
            document.getElementById("normal-consult").style.display="";
                         document.getElementById("dynamic-consult").style.display="none";
                         document.getElementById("dynamic-consult").innerHTML="";
        }
        else{
                      $.ajax({
              type:'POST',
              url:'http://localhost/dashboard/www/System%20HOD%20V2/'+tabla+'/DynamicSearch',
             data:{'clave':input.value
           },
     })
                   .done(function(datos){
                        if(datos!=0){
                         document.getElementById("normal-consult").style.display="none";
                         document.getElementById("dynamic-consult").style.display="";
                         document.getElementById("dynamic-consult").innerHTML=datos;
                        }
                        else{
                        document.getElementById("normal-consult").style.display="none";
                         document.getElementById("dynamic-consult").style.display="";
                         document.getElementById("dynamic-consult").innerHTML="<center><h3>No se han encontrado coincidencias</h3></center>";
                        }
                   });
      }
    }
    }







