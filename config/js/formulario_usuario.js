    
    function mostrarPassword(){
            var cambio = document.getElementById("txtPassword");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        } 
        
        $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function () {
            $('#password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });

    function mostrarPassword2(){
            var cambio = document.getElementById("txtPassword2");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('#icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
                $('#icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        } 
        
        $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#ShowPassword2').click(function () {
            $('#password2').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });

  //FOTO DE PERFIL A LA HORA DE REGISTRAR

  document.getElementById("foto_perfil").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    $("#preview").html('<img  class="img-circle" width="150" src="'+ image.src +'" >');
  };
  }
  