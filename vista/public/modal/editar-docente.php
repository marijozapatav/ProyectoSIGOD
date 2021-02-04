<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                     Actualizar Aula
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
                                        Nombre del Aula
                                </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-school">
                                            </i>
                                        </div>
                                        <input class="form-control mb-10" id="nombre" name="nombre" placeholder="Nombre" type="text"/>
                                    </div> 
                                
                                    <label for="tipo">
                                        Tipo de Aula
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-format-list-bulleted-type">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="tipo" name="tipo" style="width: 100%!important">
                                            <option selected="">
                                                Seleccione....
                                            </option>
                                            <option value="Salon Particular">
                                                Salon Particular
                                            </option>
                                            <option value="Laboratorio">
                                                Laboratorio
                                            </option>
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

