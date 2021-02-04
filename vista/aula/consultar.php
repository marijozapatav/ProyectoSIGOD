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
                <li class="breadcrumb-item">Aulas</li>
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
                                Consultar Aulas 
                                </h4>

                           
                                <input type="hidden" id="modulo" value="consulta-aulas">

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
                <input autocomplete="off" class="form-control" id="search-aulas" placeholder="Buscar..." type="text">
                </input>
            </div>
        </div>
    </div>
</div>

                                <table class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">
                                                Nombre del Aula 
                                            </th>
                                            <th data-hide="phone">
                                                Numero de Aula
                                            </th>
                                            <th data-hide="phone">
                                                Ubicacion
                                            </th>
                                            <th data-hide="Capacidad">
                                                Capacidad
                                            </th>
                                            <th data-hide="all" style="text-align: center">
                                                Opciones
                                            </th> 
                                        </tr>
                                    </thead>
                                    <tbody id="normal-consult">
                                    <?php foreach($this->aula as $aulas){   ?> 
                                        <tr>
                                            <td>
                                               <?php echo $aulas["nombre_aula"];?> 
                                             </td>
                                            <td>
                                                <?php echo $aulas["numero"];?>  
                                            </td>
                                            <td>
                                            	<?php echo $aulas["ubicacion"] ?>
                                            </td>
                                            <td>
                                            	<?php echo $aulas["capacidad"];?>
                                            </td>
                                            <td> 

                                             <a title="Editar usuario" class="mdi mdi-pencil-box" type="button" href="javascript:void(0)" aria-hidden="true" style="font-size: 30px; " data-placement="bottom" data-target="#actualizar" data-toggle="modal"></a>
                                           

                                                <a title="Eliminar usuario" onmouseover="this.style.color='#A60303'" onmouseout="this.style.color='red'" class="mdi mdi-delete" style="font-size: 30px; color: red; " type="button" href="<?php echo constant('URL'); ?>aula/Eliminar/<?php echo $aulas["id_aula"]; ?>"></a>



                                            </td>
                                        </tr>
                                    <?php } ?>     
                                    </tbody>
                                           <tbody id="dynamic-consult" style="display: none">
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