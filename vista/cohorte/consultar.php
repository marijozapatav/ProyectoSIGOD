<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include (call."Meta.php"); ?>
        <?php include (call."Link.php"); ?>
        <?php include (call."Title.php"); ?>
        <?php include (call."Header.php"); ?>
    </head>
    <body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Inicio contenido de pagina -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">
               
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Consultas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>inicio/">Inicio</a></li>
                <li class="breadcrumb-item">Cohorte</li>
                <li class="breadcrumb-item active">Consultas</li>
            </ol>
        </div>
    </div>
    <div class="row">
            <div class="col-lg">
                <!-- Column -->
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">
                                Consultar Cohorte
                                </h4>

                              <input type="hidden" id="modulo" value="consultas-cohorte">
                                <div class="">
    <div class="d-flex">
        <div class="mr-auto">
            <label class="form-inline">
                Monstrar
                <select class="form-control input-sm" id="demo-show-entries">
                    <option value="10">
                        10
                    </option>
                    <option value="15">
                        15
                    </option>
                    <option value="20">
                        20
                    </option>
                </select>
                Filas
            </label>
        </div>
        <div class="ml-auto">
            <div class="form-group">
                <input autocomplete="off" class="form-control" id="search-cohorte" placeholder="Buscar..." type="text">
                </input>
            </div>
        </div>
    </div>
</div>
                                
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">
                                                Número del Cohorte
                                            </th>
                                            <th data-hide="phone">
                                                Fecha
                                            </th>
                                            <th data-hide="phone">
                                                Descripcion
                                            </th>
                                            <th data-hide="all">
                                                Opciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                    
                                    <?php foreach ($this->cohorte as $cohorte) { ?>
                                            <tr>
                                            <td>
                                                <?php echo $cohorte['numero_cohorte'] ?>
                                            </td>
                                            <td>
                                                <?php echo $cohorte['fecha_cohorte'] ?>
                                            </td>
                                            <td>
                                                <?php echo $cohorte['descripcion_cohorte'] ?>
                                            </td>
                                                                                            
                                            <td>  
                                                <a class="btn btn-success waves-effect waves-light" type="button" href="javascript:void(0)" aria-hidden="true" data-placement="bottom" data-target="#actualizar" data-toggle="modal">Editar </a>

                                               

                                                <a class="btn btn-danger waves-effect waves-light" type="button" href="">Desactivar </a> 
                                            </td>
                                        </tr>  
                                 <?php   } ?>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-30"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
            </div>
        </div>
    
    </div>
</div>
<!-- ============================================================== -->
<!-- Final contenido de pagina -->
<!-- ============================================================== -->
       <?php include (call."Footer.php"); ?> 
       <?php include (call."Script.php"); ?>
    </body>
</html>
 <?php include modal."editar-cohorte.php"; ?>