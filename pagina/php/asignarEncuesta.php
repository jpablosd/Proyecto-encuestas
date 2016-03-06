<?php
$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$id_encuesta = $_GET['id_encuesta'];
$correo_usuario = $_GET['correo'];

$existeUsuario = mysql_query("SELECT * FROM usuario WHERE correo = '$correo_usuario'") or die(mysql_error());

if(mysql_num_rows($existeUsuario) > 0){
	while ($row = mysql_fetch_array($existeUsuario)) {
		$idUsuario = $row['id_usuario'];
	}

	$result_encuesta_has_usuario = mysql_query("INSERT INTO encuesta_has_usuario (encuesta_id_encuesta, usuario_id_usuario, estado, fecha, comentario_id_comentario) VALUES ('$id_encuesta', '$idUsuario', 0, now(), null)") or die(mysql_error());

	if($result_encuesta_has_usuario > 0){
		$response["success"] = 1;
    	echo json_encode($response);
	}
}
else{
	$result = mysql_query("INSERT INTO usuario (correo) VALUES ('$correo_usuario')") or die(mysql_error());

	if ($result > 0) {
		$id_usuario_insertado = mysql_insert_id();//guarda el id de la ultima inserción
		//echo $id_usuario_insertado."<br>";
		//echo $id_encuesta."<br>";

		$result_encuesta_has_usuario = mysql_query("INSERT INTO encuesta_has_usuario (encuesta_id_encuesta, usuario_id_usuario, estado, fecha, comentario_id_comentario) VALUES ('$id_encuesta', '$id_usuario_insertado', 0, now(), null)") or die(mysql_error());
		//echo $result_encuesta_has_usuario;

		if($result_encuesta_has_usuario > 0){
			$response["success"] = 1;
	    	echo json_encode($response);
		}
	}
	else{
		$response["success"] = 0;
	    echo json_encode($response);
	}
}



