<?php
$dsn = 'mysql:host=localhost;dbname=crm_bpo';
$nombre_usuario = 'root';
$contraseña = '';
$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$pdo = new PDO($dsn, $nombre_usuario, $contraseña, $opciones);

?>
