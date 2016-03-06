<?php

$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$id_usuario = $_GET["id_usuario"];
$id_encuesta = $_GET["id_encuesta"];
$pregunta = $_GET["pregunta"];
$tipo_respuesta = $_GET["tipo_respuesta"];
$respuesta_1 = $_GET["respuesta_1"];
$respuesta_2 = $_GET["respuesta_2"];
$respuesta_3 = $_GET["respuesta_3"];
$respuesta_4 = $_GET["respuesta_4"];
$respuesta_5 = $_GET["respuesta_5"];
$respuesta_6 = $_GET["respuesta_6"];
$respuesta_7 = $_GET["respuesta_7"];

// $id_usuario = "1";
// $id_encuesta = "1";
// $pregunta = "pregunta de prueba 1";
// $tipo_respuesta = "comentario";
// $respuesta_1 = "a";
// $respuesta_2 = "respuesta x";
// $respuesta_3 = "";
// $respuesta_4 = "respuesta x";
// $respuesta_5 = "qwe";
// $respuesta_6 = "respuesta x";
// $respuesta_7 = "respuesta x";

$result = mysql_query("INSERT INTO pregunta (pregunta, fecha_creacion, encuesta_id_encuesta) VALUES ('$pregunta', now(), '$id_encuesta')") or die(mysql_error());

$id_pregunta_insertada = mysql_insert_id();//guarda el id de la ultima inserción

	if($tipo_respuesta == "seleccion"){
		if($respuesta_1 == ""){
			//echo "qwerty_1";
		}else {
			$respuesta_insertada_1 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_1', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
		if($respuesta_2 == ""){
			//echo "qwerty_2";
		}else {
			$respuesta_insertada_2 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_2', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
		if($respuesta_3 == ""){
			//echo "qwerty_3";
		}else {
			$respuesta_insertada_3 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_3', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
		if($respuesta_4 == ""){
			//echo "qwerty_4";
		}else {
			$respuesta_insertada_4 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_4', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
		if($respuesta_5 == ""){
			//echo "qwerty_5";
		}else {			
			$respuesta_insertada_5 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_5', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());}
		if($respuesta_6 == ""){
			//echo "qwerty_6";
		}else {
			$respuesta_insertada_6 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_6', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
		if($respuesta_7 == ""){
			//echo "qwerty_7";
		}else{
			$respuesta_insertada_7 = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('$respuesta_7', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
		}
	}else if($tipo_respuesta == "comentario"){
		$respuesta_insertada = mysql_query("INSERT INTO respuesta_tipo (respuesta, estado, fecha_creacion, pregunta_id_pregunta) VALUES ('Comentario', 0, now(), '$id_pregunta_insertada')") or die(mysql_error());
	}else{

	}
$response = array();

if ($result > 0) {
    $response["success"] = 1;
    echo json_encode($response);
}
else{
    $response["success"] = 0;
    echo json_encode($response);
}

