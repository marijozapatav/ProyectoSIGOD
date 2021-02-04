<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                     Actualizar Cohorte
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button> 
            </div>
            <div class="modal-body">
                <form action="<?php echo constant('URL'); ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        
                            <div class="form-group row justify-content-center">
                               

                                <div class="col-md-12">
                                    <label for="unidad">
                                        Nombre de el Cohorte
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-view-dashboard">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="unidad" name="cohorte" placeholder="Nombre" type="text"/>
                                    </div>
                                </div>   

                                <div class="col-6 m-t-10">
                                    <label for="Trayecto">
                                            Trayecto
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-image-filter-none">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="Trayecto" name="trayecto">
                                            <option selected="" value="0">
                                                Seleccione....
                                            </option>
                                            <?php foreach($this->trayecto as $trayectos){   ?>
                                            <option value="<?php echo $trayectos["id_trayecto"];?> ">
                                                <?php echo $trayectos["nombre_trayecto"];?> 
                                            </option> 
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>  

                                <div class="col-6 m-t-10">
                                    <label for="unidades">
                                            Unidades Curriculares
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-book-open-page-variant">
                                            </i>
                                        </div>
                                    <select class="custom-select form-control" id="unidades" name="unidades">
                                            <option selected="" value="0">
                                                Seleccione....
                                            </option>
                                            
                                    </select>
                                    </div>
                                </div> 

                                <div class="col-md-12 m-t-10">
                                    <div class="form-group">
                                        <label for="descripcion">
                                            Descripcion
                                        </label>
                                        <textarea class="form-control" cols="5" id="descripcion" name="descripcion" rows="5">
                                        </textarea>
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

