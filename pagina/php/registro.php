<?php
require_once 'conexion/connectbd.php';

// connecting to db
$db = new DB_CONNECT();

$nombre_usuario = $_POST['nombre_usuario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];

//$nombre_usuario ="jp";
//$nombre ="jp";
//$email ="jp";
//$clave = "jp";

registro_usuario($nombre_usuario, $nombre, $email, $clave);
function registro_usuario($nombre_usuario, $nombre, $email, $clave){
    
    $response = array();

    $query = "INSERT INTO empresa (nombre_usuario, nombre, email, clave, fecha_registro)	
VALUES('$nombre_usuario', '$nombre', '$email', '$clave', NOW())";

    $result = mysql_query($query) or die(mysql_error());

//    echo "result: ".$result;
    // check for empty result
    if ($result > 0) {
        // looping through all results
        // products node
        $response["success"] = "1";

        // success
        //$response["success"] = 1;
        // echoing JSON response
        echo json_encode($response);
    } else {
        // no products found
        //$response["success"] = 0;
        $response["success"] = "0";
        // echo no users JSON
        echo json_encode($response);
    }
}