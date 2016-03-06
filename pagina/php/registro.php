<?php

$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$nombre_usuario = $_GET['nombre_usuario'];
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$password = $_GET['password'];

// $nombre_usuario = "jp2";
// $nombre = "jp2";
// $email = "jp2";
// $clave = "jp2";

$result = mysql_query("INSERT INTO empresa (nombre_usuario, nombre, email, clave, fecha_registro) VALUES('$nombre_usuario', '$nombre', '$email', '$password', NOW())") or die(mysql_error());

$response = array();

if ($result > 0) {
    $response["success"] = 1;
    echo json_encode($response);
}
else{
    $response["success"] = 0;
    echo json_encode($response);
}

