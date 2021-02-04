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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item ">Horarios</li>
                <li class="breadcrumb-item ">Seccion</li>
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
                                Consultar Horarios de Seccion 
                                </h4>

                                <?php include (call."Busqueda.php"); ?>
                                
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">
                                                Seccion
                                            </th>
                                            <th data-hide="phone">
                                                Trayecto
                                            </th>
                                             <th data-hide="phone">
                                                Ver
                                            </th>
                                            <th data-hide="all">
                                                Opciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <tr>
                                            <td>
                                               1
                                             </td>
                                            <td>
                                                1
                                            </td>
                                            
                                            <td> 
                                                <a class="btn btn-info waves-effect waves-light" type="button" href="javascript:void(0)"><i class="mdi mdi-eye-outline" style="font-size: 15px;">
                                            </i></a>
                                            </td>
                                            <td>   
                                                <a class="btn btn-success waves-effect waves-light" type="button" href="javascript:void(0)" aria-hidden="true" data-placement="bottom" data-target="#actualizar" data-toggle="modal">Editar </a>

                                                <a class="btn btn-danger waves-effect waves-light" type="button" href="javascript:void(0)">Eliminar </a>
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
 <?php include modal."editar-aula.php"; ?>