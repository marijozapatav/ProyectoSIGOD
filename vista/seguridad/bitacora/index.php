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
                <li class="breadcrumb-item ">Seguridad</li>
                <li class="breadcrumb-item active">Bitacora</li>
            </ol>
        </div> 
    </div>
    
    <div class="row">
            <div class="col-lg">
                <!-- Column -->
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">
                                Ultimas Conexiones  
                                </h4>

                                <?php include (call."Busqueda.php"); ?>
                                
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table table-bordered" data-page-size="10">
                                    <thead>
                                        <tr>

                                            <th scope="col">
                                                        #
                                                    </th>
                                                    <th scope="col" data-toggle="true">
                                                        Hora
                                                    </th>
                                                    <th scope="col">
                                                        Fecha
                                                    </th>
                                                    <th scope="col">
                                                        Accion
                                                    </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody> 
                                        <tr>
                                                    <th scope="row">
                                                        1
                                                    </th>
                                                    <td>
                                                        jemplo
                                                    </td>
                                                    <td>
                                                        jemplo
                                                    </td>
                                                    <td>
                                                        jemplo
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
