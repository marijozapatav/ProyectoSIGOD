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
                        <h3 class="text-themecolor m-b-0 m-t-0">
                            Modulos
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item ">
                                Seguridad
                            </li>
                            <li class="breadcrumb-item active">
                                Modulos
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">
                                    Modulos de Usuarios
                                </h4>
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
                                <table class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10" id="demo-foo-pagination">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Modulo
                                            </th>
                                            <th>
                                                Estado
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Inicio
                                            </td>
                                           
                                            <td>
                                                <div class="onoffswitch">
                                                    <input checked="" class="onoffswitch-checkbox" id="myonoffswitch1" name="onoffswitch1" type="checkbox">
                                                        <label class="onoffswitch-label" for="myonoffswitch1">
                                                            <span class="onoffswitch-inner">
                                                            </span>
                                                            <span class="onoffswitch-switch">
                                                            </span>
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-30">
                                                    </ul>
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
