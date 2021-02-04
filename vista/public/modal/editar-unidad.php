<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                     Actualizar Unidad
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
                                <label for="unidad">
                                        Nombre de la Unidad
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="unidad" name="unidad" placeholder="Nombre" type="text" value="<?php echo $unidades["nombre"];?>" />
                                    </div>
                                
                                    <label for="Trayecto">
                                            Trayecto
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-image-filter-none">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="Trayecto" name="categoria">
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

