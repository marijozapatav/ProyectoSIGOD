<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
    body
    {
    background-image: url(<?php echo constant('URL')?>config/img/web/404.png);
    background-repeat: no-repeat;/*<------------------NO REPETIR LA IMAGEN DE EL ENCABEZADO*/
    background-size: cover;/*<------------------------ADAPTA EL TAMAÑO DE LA IMAGEN*/
    color: white;
    font-family: Helvetica, Arial;
    text-align: center;
    padding: 50vh;
    }
    .btn{
    background-color: #e9970b; 
    color: white;
    padding: 15px 20px;
    border-radius: 20px;
    text-decoration: none;
}
    </style>
    <title>
        404 ERROR!
    </title>
</head>
<body>

   

    <div id="main">
        <h1 class="center error">
        <div>
        <a href="<?php URL; ?>inicio/" class='btn'>Regresar </a>
        </div>
        </h1>
    </div>

</body>
</html>