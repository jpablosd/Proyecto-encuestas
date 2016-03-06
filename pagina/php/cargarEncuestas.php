<?php
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();


$id_usuario = $_GET['id_usuario'];

//$id_usuario = 1;

$result = mysql_query("SELECT * FROM encuesta where empresa_id_empresa = $id_usuario") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) {
    $response['encuestas'] = array();
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $encuesta = array();
        $encuesta["id_encuesta"]     = $row["id_encuesta"];
        $encuesta["nombre_encuesta"] = $row["nombre_encuesta"];
		$encuesta["tipo_encuesta"]   = $row["tipo_encuesta"];
		$encuesta["estado"]          = $row["estado"];
		$encuesta["fecha_creacion"]  = $row["fecha_creacion"];

       // $cliente_cc["Geom"] = $row["Geom"];
        // push single product into final response array
        array_push($response['encuestas'], $encuesta);
    }
    // success
    $response["success"] = 1;
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No se encontraron encuestas";
    // echo no users JSON
    echo json_encode($response);
}

