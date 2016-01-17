<?php

require("conexion/config.php");
require("conexion/db_cloud.php");

$usuario = $_GET['nombre_usuario'];
$password = $_GET['password'];

// $usuario = "jp";
// $password = "jp";

$strQuery="SELECT * FROM empresa where nombre_usuario = '$usuario' AND clave ='$password'";

$query = $dbh->prepare($strQuery);$query->execute();
  
      while($data = $query->fetch()){
          $rows[] = array(
                    "id_empresa" => (isset($data['id_empresa']) ? $data['id_empresa'] : "0")
          );
          session_start();
          $_SESSION['nombre_usuario']=$data['nombre_usuario'];
      }

    if (isset($rows)) {        
        $json = "{\"status\":\"OK\",\"result\":".json_encode($rows)."}";
    }
    else {
        $json = "{\"status\":\"ERROR\"}";
    }

$callback = $_GET['callback'];
echo $callback.'('. $json . ')'; 

