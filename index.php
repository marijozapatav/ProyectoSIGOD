<?php

date_default_timezone_set('America/Caracas');
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'app/config/config.php';

require 'app/app.php';
require 'app/database.php';
require 'app/controller.php';
require 'app/model.php';
require 'app/view.php';

$app = new Iniciar_Sistema();

?>