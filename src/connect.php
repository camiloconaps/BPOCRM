<?php
<<<<<<< HEAD
$dsn = 'mysql:host=localhost;dbname=crm_bpo';
$nombre_usuario = 'root';
$contraseña = '';
$opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$pdo = new PDO($dsn, $nombre_usuario, $contraseña, $opciones);
=======
//Valida la conexión de base de datos
try {
	$dsn = 'mysql:host=localhost;dbname=crm_bpo';
	$nombre_usuario = 'root';
	$contraseña = '12345';
	$opciones = array(
	    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
    $pdo = new PDO($dsn, $nombre_usuario, $contraseña, $opciones);
} catch(PDOException $e){
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
>>>>>>> 9e1eb9383883b8af6147754d16a61109cf945e20

?>
