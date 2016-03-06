<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Encuesta</title>

        <!--  Android 5 Chrome Color-->
        <meta name="theme-color" content="#1976d2">
        <!-- CSS-->
        <link href="css/prism.css" rel="stylesheet">
        <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!--        <script type="text/javascript" src="scripts/controllers/login.js"></script>-->
        <!--  Scripts-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jquery.timeago.min.js"></script>  
        <script src="js/prism.js"></script>
        <script src="bin/materialize.js"></script>
        <!--
<script src="js/init.js"></script>
-->
    <script type="text/javascript">
	$( document ).ready(function() {
    	$("#ver_encuesta").hide();
    	$("#buscar_encuesta").show();
	});


    var respuestaEncuesta = [{}];
    
    //respuestaEncuesta.push({"idPregunta": "1", "respuesta": "2"});

    var email_usuario;
    var id_usuario;
    function buscarEncuesta(){
    	email_usuario = document.getElementById("email_usuario").value;
    	if(!validarEmail(email_usuario)){
			Materialize.toast('Email Incorrecto', 4000);
    	}else{
    		$("#buscar_encuesta").hide();
    		$("#ver_encuesta").show();

			var out = "";
            $("#encuesta").prepend(out);
            document.getElementById("encuesta").innerHTML = "";

            var xmlhttp = new XMLHttpRequest();
            var url = "php/encuesta_usuario.php?email_usuario="+email_usuario;
            //console.log(url);
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //console.log("cargando1");
                    myFunction(xmlhttp.responseText);
                }
            }
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            function myFunction(response) {
                //console.log("response: "+response);
                var arr = JSON.parse(response);
                //console.log(arr.success);
                if(arr.success==1){
                    //console.log(arr);
	                //console.log(arr.preguntas[0].encuesta_id_encuesta);
                    id_usuario = arr.id_usuario;
                    respuestaEncuesta.push({"idEncuesta":arr.preguntas[0].encuesta_id_encuesta});

	                for(var i = 0; i < arr.preguntas.length; i++) {
	                    out += "<p><b>"+arr.preguntas[i].pregunta+"</b></p>";
	                    //console.log("pregunta: "+arr.preguntas[i].pregunta);
	                    if(arr.preguntas[i].respuesta != null){
	                        //console.log(arr.preguntas[i].respuesta.length);
	                        for(var a=0; a < arr.preguntas[i].respuesta.length; a++){
	                            //console.log("id respuesta: "+arr.preguntas[i].respuesta[a].id_respuesta_tipo);
	                            //console.log("respuesta: "+arr.preguntas[i].respuesta[a].respuesta);
	                            if(arr.preguntas[i].respuesta[a].respuesta == "Comentario"){
                                    //respuestaEncuesta.push({"pregunta":arr.preguntas[i].respuesta[a].pregunta_id_pregunta , "respuesta":arr.preguntas[i].respuesta[a].id_respuesta_tipo});
	                                
                                    out += "<div class='input-field col s12'><textarea id="+arr.preguntas[i].id_pregunta+" class='materialize-textarea'></textarea><label for="+arr.preguntas[i].respuesta[a].id_respuesta_tipo+">Comentario</label></div>";
	                            }else{
                                    //respuestaEncuesta.push({"pregunta":arr.preguntas[i].respuesta[a].pregunta_id_pregunta,"respuesta":arr.preguntas[i].respuesta[a].id_respuesta_tipo});

	                                out += '<p><input name="'+arr.preguntas[i].id_pregunta+'" type="radio" id="'+arr.preguntas[i].respuesta[a].id_respuesta_tipo+'" value="'+arr.preguntas[i].respuesta[a].id_respuesta_tipo+'"/><label for="'+arr.preguntas[i].respuesta[a].id_respuesta_tipo+'">'+arr.preguntas[i].respuesta[a].respuesta+'</label></p>';
	                            }
	                        }//for
	                        out += "<br>";
	                    }//if
	                    else{
	                        //no tiene respuesta
	                        out += '<p>No tiene Respuesta.</p>';
	                    }
	                    out += "<br>";
                        respuestaEncuesta.push({"idPregunta":arr.preguntas[i].id_pregunta, "tipoPregunta":arr.preguntas[i].tipo_respuesta});
	                }//for
	                out+="<br>";
	                $("#encuesta").prepend(out);
                }else{
					Materialize.toast('No Tiene Encuestas', 4000);
                }
            }//myFunction
    	}//else
    }//buscarEncuesta    

    function validarEmail( email ) {
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!expr.test(email)){
            //alert("Error: La dirección de correo " + email + " es incorrecta.");
            //Materialize.toast('Email Incorrecto', 4000); 
            return false;
        }else{
            return true;
        }
    }//validarEmail

    function volver(){
    	$("#ver_encuesta").hide();
    	$("#buscar_encuesta").show();
    }

    function enviarResultados(){
        //console.log(email_usuario);
        var url = "respuestaEncuesta.php?";
        for(var i in respuestaEncuesta){
            if(respuestaEncuesta[i].tipoPregunta == "Comentario"){
                var res = $("#"+respuestaEncuesta[i].idPregunta).val();
                //console.log(respuestaEncuesta[i].idPregunta + ": "+res);
                url ="respuestaEncuesta.php?idPregunta="+respuestaEncuesta[i].idPregunta+"&respuesta="+res+"&idUsuario="+id_usuario;

                var xmlhttp = new XMLHttpRequest();
                var url = "php/"+url;
                //console.log(url);
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        //console.log("cargando1");
                        //myFunction(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
            else if(typeof respuestaEncuesta[i].tipoPregunta !== "undefined"){
                var res=$("input:radio[name='"+respuestaEncuesta[i].idPregunta+"']:checked").val();
                //console.log(respuestaEncuesta[i].idPregunta +": "+ res);
                url="respuestaEncuesta.php?idPregunta="+respuestaEncuesta[i].idPregunta+"&respuesta="+res+"&idUsuario="+id_usuario;

                var xmlhttp = new XMLHttpRequest();
                var url = "php/"+url;
                //console.log(url);
                xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        //console.log("cargando1");
                        //myFunction(xmlhttp.responseText);
                    }
                }
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
            }
        }//for
    }//enviarResultados

    </script>


    </head>
    <body>
        <div id="buscar_encuesta" class="row">
            <div class="col s12 m3 l2"><p></p></div>
            <!-- INICIO DE SESION -->
            <div class="col s12 m6 l8">
                <div class="card">
                    <div class="card-content">
                        <div class="center-align">
                            <a id="logo-container" href="#" class="brand-logo">
                                <!--                                <object id="front-page-logo"  data="res/awarehome.png" style="height:110%; width: 40%; "></object>-->
                            </a>
                        </div>
                        <div class="input-field col s12 ">
                        		<div class="input-field col s12 m12 l12">
                                    <input id="email_usuario" type="email" class="validate">
                                    <label for="email_usuario">Ingrese su Email</label>
                            	</div>
                        </div>
                        <div class="center-align">
                            <div class="col s12 m12 l12">
                                <a class="waves-effect  btn" onclick="buscarEncuesta()">Buscar Encuestas</a>
                            </div>
                        </div>
                    </div>
                        <br><br><br>
                        <br><br><br>
                </div>
            </div>
        </div>

        <div id="ver_encuesta" class="row">
        	<div class="col s12 m3 l2"><p></p></div>
            <div class="col s12 m6 l8">
                <div class="card">
                    <div class="card-content">
                    	<div id="encuesta" class="row">
							<p><b>Hola</b></p>
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Comentario</label>
							</div>
							<p>
								<input name="group1" type="radio" id="test1" />
								<label for="test1">Red</label>
							</p>
							<p>
								<input name="group1" type="radio" id="test2" />
								<label for="test2">Yellow</label>
							</p>
							<p>
								<input name="group1" type="radio" id="test3"  />
								<label for="test3">Green</label>
							</p>
							<p>
								<input name="group1" type="radio" id="test4"  />
								<label for="test4">Blue</label>
							</p>
							<p>
								<input name="group1" type="radio" id="test5"  />
								<label for="test5">Grey</label>
							</p>
							<br>
						</div>
					</div>
					<div class="center-align">
                            <div class="col s12 m12 l12">
                                <a class="waves-effect  btn" onclick="enviarResultados()">Enviar Respuestas</a>
                                <a class="waves-effect  btn orange" onclick="volver()">Volver</a>
                            </div>
                    </div>
                    <br><br><br>
				</div>
			</div>
		</div>	

		
    </body>
</html>