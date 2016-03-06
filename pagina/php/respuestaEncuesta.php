<?php
$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$idPregunta = $_GET['idPregunta'];
$respuesta = $_GET['respuesta'];
$idUsuario = $_GET['idUsuario'];

$result = mysql_query("insert into respuesta_usuario (fecha_creacion, pregunta_id_pregunta, respuesta, id_usuario) 
values (now(), '$idPregunta', '$respuesta', '$idUsuario')") or die(mysql_error());
//$result = 1;

if ($result > 0) {
	$response["success"] = 1;
	echo json_encode($response);

}
else{
	$response["success"] = 0;
    echo json_encode($response);
}

