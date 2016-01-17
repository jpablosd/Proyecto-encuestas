<?php

require("conexion/config.php");
require("conexion/db_cloud.php");

$nombre_usuario = $_GET['nombre_usuario'];
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$password = $_GET['password'];

// $nombre_usuario = "jp2";
// $nombre = "jp2";
// $email = "jp2";
// $clave = "jp2";



$strQuery="INSERT INTO empresa (nombre_usuario, nombre, email, clave, fecha_registro) VALUES('$nombre_usuario', '$nombre', '$email', '$clave', NOW())";

$query = $dbh->prepare($strQuery);
$query->execute();
  
      while($data = $query->fetch()){
        // var_dump($data);
        //   $rows[] = array(
        //             "id_empresa" => (isset($data['id_empresa']) ? $data['id_empresa'] : "0")
        //   );
      }

    if (isset($rows)) {        
        $json = "{\"status\":\"OK\"}";
    }
    else {
        $json = "{\"status\":\"OK\"}";
    }

$callback = $_GET['callback'];
echo $callback.'('. $json . ')'; 

