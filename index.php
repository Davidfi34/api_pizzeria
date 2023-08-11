<?php

require_once 'config/config.php';
require_once 'router/router.php';
require_once 'router/api.php';



/**
 * SECUENCIA -> index -> router -> controllers -> models -> DB
 */

// Ejecutar el enrutador para manejar la solicitud actual
$router->run();
