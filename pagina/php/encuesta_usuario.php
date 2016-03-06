<?php
header('Content-Type: application/json');

require_once("conexion/config.php");
// connecting to db
$db = new DB_Connect();

$email_usuario = $_GET['email_usuario'];


//$email_usuario = 'juanpablo.soto17@gmail.com';

$result = mysql_query("SELECT * FROM encuesta_has_usuario a, usuario b, encuesta c WHERE b.id_usuario = a.usuario_id_usuario AND b.correo = '$email_usuario' AND c.id_encuesta = a.encuesta_id_encuesta") or die(mysql_error());

if(mysql_num_rows($result) > 0){

    while ($row = mysql_fetch_array($result)) {
        $response['id_usuario'] = $row['id_usuario'];
        $id_encuesta = $row['encuesta_id_encuesta'];

        $result_pregunta = mysql_query("Select id_pregunta, pregunta,encuesta_id_encuesta from pregunta where encuesta_id_encuesta = '$id_encuesta'") or die(mysql_error());

        if (mysql_num_rows($result_pregunta) > 0) {
            $response['preguntas'] = array();
            while ($row_pregunta = mysql_fetch_array($result_pregunta)) {
                $preguntas = array();
                $id_pregunta = $row_pregunta["id_pregunta"];

                $preguntas['id_pregunta'] = $row_pregunta["id_pregunta"];
                $preguntas["pregunta"] = $row_pregunta["pregunta"];
                $preguntas["encuesta_id_encuesta"] = $row_pregunta["encuesta_id_encuesta"];

                $result_respuesta_tipo = mysql_query("select id_respuesta_tipo, respuesta, pregunta_id_pregunta from respuesta_tipo where pregunta_id_pregunta = '$id_pregunta'") or die(mysql_error());
                $response_respuesta= array();
                if (mysql_num_rows($result_respuesta_tipo) > 0) {
                    $respuestas = array();
                    while ($row_respuesta_tipo = mysql_fetch_array($result_respuesta_tipo)) {
                        $respuestas['id_respuesta_tipo'] = $row_respuesta_tipo['id_respuesta_tipo'];
                        $respuestas['respuesta'] = $row_respuesta_tipo["respuesta"];
                        $respuestas['pregunta_id_pregunta'] = $row_respuesta_tipo['pregunta_id_pregunta'];
                        $preguntas["tipo_respuesta"] = $row_respuesta_tipo["respuesta"];
                        array_push($response_respuesta, $respuestas);
                    }//while
                    $preguntas["respuesta"] = $response_respuesta;
                }//if
                else{
                    $preguntas["respuesta"] = $respuestas;
                }
                array_push($response['preguntas'], $preguntas);
            }//while
            $response["success"] = 1;
            echo json_encode($response, JSON_PRETTY_PRINT);
        }//if
        else{
            $response["success"] = 0;
            $response["message"] = "No se encontraron encuestas";
            echo json_encode($response, JSON_PRETTY_PRINT);
        }

    }//while
}else{
    $response["success"] = 0;
    $response["message"] = "No se encontraron encuestas";
    echo json_encode($response, JSON_PRETTY_PRINT);
}

