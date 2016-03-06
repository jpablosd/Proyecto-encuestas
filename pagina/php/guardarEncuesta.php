<?php

$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$nombre_encuesta = $_GET['nombre_encuesta'];
$descripcion_encuesta = $_GET['descripcion_encuesta'];
$id_usuario = $_GET['id_usuario'];

// $nombre_encuesta = "test2";
// $descripcion_encuesta = "test2Desc";
// $id_usuario = 1;


$result = mysql_query("insert into encuesta (nombre_encuesta, tipo_encuesta, estado, fecha_creacion, empresa_id_empresa) values ('$nombre_encuesta','$descripcion_encuesta', 1, now(), '$id_usuario')") or die(mysql_error());

$response = array();

if ($result > 0) {
    $response["success"] = 1;
    echo json_encode($response);
}
else{
    $response["success"] = 0;
    echo json_encode($response);
}
