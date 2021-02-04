<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                     Actualizar Seccion
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
                                <label for="trayecto">
                                        Trayecto
                                </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-image-filter-none">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="trayecto" name="trayecto" style="width: 100%!important;">    
                                        <?php foreach($this->trayecto as $trayectos){   ?>
                                            <?php if ($secciones["idtrayecto"] ==  $trayectos["idtrayecto"]): ?>
                                            <option selected="">
                                                <?php echo $trayectos["nombre"] ?>
                                            </option>
                                            <?php endif ?>
                                            <option value="1">
                                            <?php echo $trayectos["nombre"];?>
                                            </option>
                                        <?php } ?>
                                        </select> 
                                    </div>

                                    <label for="apartamento">
                                        Nombre de la Seccion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" value="<?php echo $secciones["nombre"];?> ">
                                        </input>
                                    </div>      
                                
                                    <label for="capacidad">
                                        Año de la Seccion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-calender">
                                            </i>
                                        </div>
                                        <input class="form-control input-number" id="anio" name="anio" placeholder="Año" type="text" value="<?php echo $secciones["anio"];?> ">
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

