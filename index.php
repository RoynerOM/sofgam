<?php
/* Mostrar erorres*/
ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "D:/xampp/htdocs/SOFGAM/admin/php_error_log");

/* Cors*/

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: POST');


/* Requerimientos*/

require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";


$index = new TemplateController();
$index -> index();