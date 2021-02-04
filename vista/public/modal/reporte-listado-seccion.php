<!-- Modal -->
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="reporte" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Seleccionar Lapso
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
                            <label for="trayecto">
                                Trayecto
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="mdi mdi-image-filter-none">
                                    </i>
                                </div>
                                <select class="custom-select" id="trayecto" name="trayecto" style="width: 100%!important;">
                                    <option selected="">
                                     Selecione...
                                    </option>
                                <?php foreach($this->trayecto as $trayectos){   ?>
                                    <option value="<?php echo $trayectos["id_trayecto"];?> ">
                                        <?php echo $trayectos["nombre_trayecto"];?> 
                                    </option>  
                                <?php } ?>
                                </select> 
                            </div>

                        </div>
                        <div class="col-md-12 m-t-10">
                            <label for="anio">
                                Año
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="mdi mdi-timetable">
                                    </i>
                                </div>
                                <select class="custom-select" id="anio" name="anio" style="width: 100%!important;">
                                    <option selected="">
                                        Selecione...
                                    </option>
                                    <option value="2010">
                                        2010
                                    </option>
                                    <option value="2011">
                                        2011
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary" data-dismiss="modal" id="guardar" type="button" value="Imprimir">
                    <button class="btn btn-secondary" data-dismiss="modal" type="button">
                        Cancelar
                    </button>
                </input>
            </div>
        </div>
    </div>
</div>
