<?php 

$servidor ="localhost";
$db ="adminupala_bdsofgam";
$username = "adminupala_usr";
$password = "zNNF523YSvB5";
 try {
     $conexion =new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
    
 }catch(Exception $e) {

  echo $e->getMessage();
 }
?>   
