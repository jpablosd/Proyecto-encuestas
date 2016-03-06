<?php
	session_start();

$response = array();
require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();


$usuario = $_GET['nombre_usuario'];
$password = $_GET['password'];
// $usuario = "jp";
// $password = "jp";


$result = mysql_query("SELECT * FROM empresa where nombre_usuario = '$usuario' AND clave ='$password'") or die(mysql_error());

$response = array();
if (mysql_num_rows($result) > 0) {
    $_SESSION['nombre_usuario']=$usuario;

    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $usuario = array();
        $usuario["id_empresa"] = $row["id_empresa"];
        $_SESSION['id_empresa']=$row["id_empresa"];
       // $cliente_cc["Geom"] = $row["Geom"];
        // push single product into final response array
        //array_push($response, $usuario);
    }
    // success
    //$response["success"] = 1;
    // echoing JSON response



	$response["success"] = 1;
	echo json_encode($response);
}
else{
	$response["success"] = 0;
	echo json_encode($response);
}

