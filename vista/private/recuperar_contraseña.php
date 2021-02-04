<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" >Recuperación de contraseña</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <form method="POST" enctype="multipart/form-data" action="" name="" id="cambioForm">

                <div class="modal-body">
                	<div class="panel-body">

                   <h5 class="modal-title text-center" style="margin-bottom: 8px;">Datos del usuario</h5>

                   <input  type="number" class="form-control input-number" placeholder="Ingrese su cédula" id="cedulaEmergente" name="cedulaEmergente"  /> 
				   <div id="textoCedula"  style='color:red'></div>

                    </br>

                   <h5 class="modal-title text-center" style="margin-bottom: 8px;">Preguntas de seguridad</h5>
                   
					<input type="text" class="form-control input-text" id="mascota" name="mascota"   placeholder="Nombre de su primera mascota" style="margin-bottom: 4px;">
		            <div id="textoMascota"  style='color:red'></div>

					<div class="">
						<select class="form-control select" style="margin-bottom: 4px;" id="animFav" name="animFav">
						<option value="0">-Seleccione su animal favorito-</option>
				 		<option value="1">Perro</option>
				 		<option value="2">Gallina</option>
				 		<option value="3">Gato</option>
				 		<option value="4">Dinosaurio</option>
				 		<option value="5">Serpiente</option>
				 		<option value="6">Panda</option>
				 		<option value="7">Burro</option>
				 		<option value="8">Caballo</option>
				 		<option value="9">Pollo</option>
						</select>
				   </div> 
				   <div id="textoAnimFav"  style='color:red'></div>

				   <div >
					<select class="form-control select" id="colorFav" name="colorFav">
						<option value="0">-Seleccione su color favorito-</option>
				 		<option value="1">Blanco</option>
				 		<option value="2">Verde</option>
				 		<option value="3">Negro</option>
				 		<option value="4">Azul</option>
				 		<option value="5">Naranja</option>
				 		<option value="6">Fucsia</option>
				 		<option value="7">Dorado</option>
				 		<option value="8">Rojo</option>
				 		<option value="9">Morado</option>
					</select>
				   </div>
				   <div id="textoColorFav"  style='color:red'></div>

				   </br>

				   <h5 class="modal-title text-center" style="margin-bottom: 8px;">Nueva contraseña</h5>

				   
				   <input type="password" class="form-control espacios" name="passwordEmergente" id="passwordEmergente" placeholder="Contraseña" style="margin-bottom: 4px;">
				   <div id="textoClave1"  style='color:red'></div>
					<input type="password" class="form-control espacios" name="passwordEmergente2" id="passwordEmergente2" placeholder="Confirmar contraseña">
					
				
				<div id="textoClave2"  style='color:red'></div>
		
               		</div>
                </div>
                <div class="modal-footer">
                    <input type="button" value="Guardar"  class="btn btn-primary " id="modificarContrasenia"/>

                </div>
            </form>
            </div>
        </div>
    </div>