<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                     Actualizar Usuario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" enctype="multipart/form-data" id="registro" method="POST" name="registro">
                    <div class="form-group">
                        
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <div class="col-12">
                                  <center>
                                        <div id="preview_modal" style="margin-top: 10px;">
                                            <img class="img-circle" src="<?php echo constant('URL')?>config/img/users/user-3.png" width="80">
                                            </img>
                                        </div>
                                        <h4 class="card-title m-t-10 text-themecolor" style="margin-top: 30px;">
                                        Foto de perfil
                                        </h4>
                                    </center>  
                                </div>

                                
                                <label for="foto">
                                     Subir imagen
                                </label>
                                <div class="input-group">
                                    <input class="form-control bg-3" id="foto" name="foto" type="file">
                                    </input>
                                </div>
                               

                                <label for="cedula">
                                    Cedula
                                </label>
                                <div class="input-group">
                                    <input class="form-control input-number" id="cedula" name="cedula" placeholder="Cedula de identidad" type="text-center" value="<?php echo $usuarios["cedula"];?> " />
                                </div>   
                                
                                <label for="nombre1">
                                    Nombre
                                </label>
                                <div class="input-group">
                                    <input class="form-control mb-10" id="nombre1" name="prinombre" placeholder="Primer Nombre" type="text" value="<?php echo $usuarios["nombre"];?> " />
                                </div>

                                <label for="apellido1">
                                    Apellido
                                </label>
                                <div class="input-group">
                                    <input class="form-control mb-10" id="apellido1" name="priapellido" placeholder="Primer Apellido" type="text" value="<?php echo $usuarios["apellido"];?> " />
                                </div> 

                                <label for="correo">
                                    Correo Electronico
                                </label>
                                <div class="input-group">
                                    <input class="form-control espacios" id="correo" name="correo" placeholder="Correo electrónico " type="email" value="<?php echo $usuarios["correo"];?> " >
                                    </input>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <input class="btn btn-primary" type="button" value="Guardar" id="guardar" data-dismiss="modal">

                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cancelar
                </button>
                
                
            </div>
        </div>
        
    </div>
</div>

