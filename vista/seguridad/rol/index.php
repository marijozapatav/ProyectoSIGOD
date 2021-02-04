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
            <h3 class="text-themecolor m-b-0 m-t-0">Roles</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item ">Seguridad</li>
                <li class="breadcrumb-item active">Roles</li>
            </ol>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                 <div class="card-block">
                                <h4 class="card-title">
                                Roles de Usuarios
                                </h4>

                                <label class="form-inline">Monstrar
                                    <select id="demo-show-entries" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select> Filas </label>
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th data-toggle="true">
                                                Nombre
                                            </th>
                                            <th data-hide="phone">
                                                Apellido
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
                                                1
                                            </td>
                                            
                                            <td>
                                                <a class="btn btn-info waves-effect waves-light" type="button" href="javascript:void(0)">Asignar </a>

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
