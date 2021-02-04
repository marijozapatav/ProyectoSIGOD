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
            <h3 class="text-themecolor m-b-0 m-t-0">Reporte</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo constant('URL'); ?>inicio/">Inicio</a></li>
                <li class="breadcrumb-item"> Listado de Docentes</li>
                <li class="breadcrumb-item active">Reporte</li>
            </ol>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                   <form action="<?php echo constant('URL'); ?>reporte/Reporte_ListadoD" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Reporte Listado de Docentes
                                    </h1>
                                </div>
                                
                                <div class="col-9">
                                    <input type="button" class="btn  btn-success m-r-10" name="imprimir" id="imprimir" value="Imprimir Listado" aria-hidden="true" data-placement="bottom" data-target="#reporte" data-toggle="modal">

                                    <?php include modal."reporte-lapso.php"; ?> 
                                </div>

                                <div class="col-3">
                                     <label class="form-inline">Monstrar
                                    <select id="demo-show-entries" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select> Filas </label>
                                </div>
                               
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table m-t-20" data-page-size="10">
                                    <thead>
                                        <tr>
                                            
                                            <th data-toggle="true">
                                                Nombre
                                            </th>
                                            <th data-toggle="true">
                                                Apellido
                                            </th>
                                            <th data-toggle="true">
                                                Cedula
                                            </th>
                                            <th data-toggle="true">
                                                Unidad Curricular
                                            </th>

                                             <th data-toggle="true">
                                                Cohorte
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td>
                                                1
                                            </td>

                                             <td>
                                                2
                                            </td>

                                             <td>
                                                3
                                            </td>
                                            <td>
                                                3
                                            </td>  
                                            <td>
                                                3
                                            </td>                                            
                                           
                                        </tr>
                                           
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
                    </form>
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
