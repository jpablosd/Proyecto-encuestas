<div id="verEncuesta" class="col s12 m12 l12">
	<div class="card">
		<div class="card-content">
			<span class="card-title grey-text text-darken-4">Ver Encuesta</span>
		</div>
	</div>
	<div class="card z-depth-3">
		<div class="card-content">
			<div>
				<p>Ver Encuesta</p>
				<ul id="listaEncuestas" class="collapsible" data-collapsible="accordion">
        <!--
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                -->
                </ul>
            </div>
            <br>
        </div>
    </div>
</div>


    <div id="contenidoEncuesta">
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title grey-text text-darken-4">Ver Encuesta</span>
                    <br>
                    <div class="row">
                        <div class="col s2 m2 l2">
                            <a class="waves-effect waves-light btn "onclick="verEnviarEncuesta()">Enviar Encuesta</a>
                        </div>
                        <div class="col s2 m2 l2">
                            <a class="waves-effect waves-light btn "onclick="verVerPreguntas()">Ver Preguntas</a>
                        </div>
                        <div class="col s2 m2 l2">
                            <a class="waves-effect waves-light btn "onclick="verAgregarPregunta()">Agregar Pregunta</a>
                        </div>                        
                        <div class="col s2 m2 l2">
                            <a class="waves-effect waves-light btn "  onclick="verModificarPregunta()">Modificar Pregunta</a>
                        </div>                        
                        <div class="col s2 m2 l2">
                            <a class="waves-effect waves-light btn orange lighten-2" onclick="verEliminarPregunta()">Eliminar Pregunta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card z-depth-3">
                <div class="card-content">
                    <!-- Enviar encuesta a usuario-->
    
                    <div class="row" id="enviarEncuesta">
                            <p>Enviar Encuesta</p>
                            <div class="col s12 m12 l12">
                                <div class="input-field col s12 m12 l12">
                                    <input id="email_usuario" type="email" class="validate">
                                    <label for="email_usuario">Agregar Usuario</label>
                                </div>
                            </div>
                            <br>
                            <div class="col s12 m12 l12">
                                <div class="col s6 m6 l6">
                                    <a class="waves-effect waves-light btn " onclick="enviarEncuesta()">Enviar</a>
                                    <a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
                                </div>
                            </div>
                        </div>
                    <!-- Enviar encuesta a usuario-->

                    <!-- agregar pregunta -->
                        <div class="row" id="crearPregunta">
                            <p>Crear Preguntas</p>
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <input id="pregunta" type="text" class="validate">
                                    <label for="pregunta">Formular Pregunta</label>
                                </div>
                            </div>
                                <p>Crear Respuesta</p>
                                <div class="col s12 m12 l12">
                                    <!-- Switch -->
                                    <div class="switch">
                                        <label>
                                            Comentario
                                            <input id="switch_tipo_respuesta" type="checkbox">
                                            <span class="lever"></span>
                                            Selección
                                        </label>
                                        <!-- Si es comentario se deja un input y si es de seleccion se dejan varios input max 5 o 7-->
                            

                                        <div id="respuesta_seleccion" class="col s12 m12 l12" style="display:none">
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_1" type="text" class="validate">
                                                <label for="respuesta_1">Respuesta nº 1</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_2" type="text" class="validate">
                                                <label for="respuesta_2">respuesta nº 2</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_3" type="text" class="validate">
                                                <label for="respuesta_3">respuesta nº 3</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_4" type="text" class="validate">
                                                <label for="respuesta_4">respuesta nº 4</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_5" type="text" class="validate">
                                                <label for="respuesta_5">respuesta nº 5</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_6" type="text" class="validate">
                                                <label for="respuesta_6">respuesta nº 6</label>
                                            </div>
                                            <div class="input-field col s12 m12 l12">
                                                <input id="respuesta_7" type="text" class="validate">
                                                <label for="respuesta_7">respuesta nº 7</label>
                                            </div>
                                        </div>

                                        <div id="respuesta_comentario" class="col s12 m12 l12">
                                            <div class="input-field col s12 m12 l12">
                                                <input disabled id="respuesta_comentario" type="text" class="validate">
                                                <label for="respuesta_comentario">Esta es una respuesta tipo comentario</label>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="col s6 m6 l6">
                                            <a class="waves-effect waves-light btn" onclick="agregarPregunta()">Agregar esta Pregunta</a>
                                        </div>
                                        <div class="col s6 m6 l6">
                                            <a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                        </div>
                    <!-- agregar pregunta-- >
                    
                    <!-- Ver preguntas -->
                    <div class="row" id="verPreguntas">
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
                            <div class="col s12 m12 l12">
                                <div class="col s6 m6 l6">
                                    <a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
                                </div>
                            </div>
                        </div>
                    <!-- Ver preguntas --> 

                                        <!-- Modificar preguntas -->
                    <div class="row" id="modificarPreguntas">
                            <p>Modificar Preguntas</p>
                            <div class="row">
                                 <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                  </ul>
                            </div>
                            <div class="col s12 m12 l12">
                                <div class="col s6 m6 l6">
                                    <a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
                                </div>
                            </div>
                        </div>
                    <!-- Modificar preguntas --> 

                                        <!-- eliminar preguntas -->
                    <div class="row" id="eliminarPreguntas">
                            <p>Eliminar Preguntas</p>
                            <div class="row">
                                 <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                    <li>
                                      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                                      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                                    </li>
                                  </ul>
                            </div>
                            <div class="col s12 m12 l12">
                                <div class="col s6 m6 l6">
                                    <a class="waves-effect waves-light btn orange lighten-2" onclick="volver()">Volver</a>
                                </div>
                            </div>
                        </div>
                    <!-- eliminar preguntas --> 
                </div><!-- div card-->
            </div>
        </div>
    </div>

<script type="text/javascript">
        
        $("#contenidoEncuesta").hide();

        var id_usuario = idEmpresa;

        var out = "";
        $("#listaEncuestas").prepend(out);
        document.getElementById("listaEncuestas").innerHTML = "";


        //console.log("cargar encuestas: "+id_usuario);
        var xmlhttp = new XMLHttpRequest();
        var url = "../php/cargarEncuestas.php?id_usuario="+id_usuario;
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

            for(var i = 0; i < arr.encuestas.length; i++) {
                // console.log(arr.encuestas[i].id_encuesta);
                // console.log(arr.encuestas[i].nombre_encuesta);
                // console.log(arr.encuestas[i].tipo_encuesta);
                // console.log(arr.encuestas[i].estado);
                // console.log(arr.encuestas[i].fecha_creacion);

                out +="<li><div class='collapsible-header'><a href='#!' onclick='verEncuestaPorId("+arr.encuestas[i].id_encuesta+")' class='secondary-content'><i class='material-icons'>send</i>ir</a><i class='material-icons'>list</i>"+arr.encuestas[i].nombre_encuesta+"</div><div class='collapsible-body'><p>"+arr.encuestas[i].tipo_encuesta+"</p></div></li>";
            }//for
            $("#listaEncuestas").prepend(out);

        }//myFunction

        var id_encuesta;

        function verEncuestaPorId(id){
            id_encuesta = id;
            //alert(id_encuesta);
            $("#verEncuesta").hide();
            $("#contenidoEncuesta").show();
            $("#crearPregunta").hide();
            $("#verPreguntas").hide();
            $("#modificarPreguntas").hide();   
            $("#eliminarPreguntas").hide();
            $('#enviarEncuesta').show();


        }
        function verEnviarEncuesta(){
            $("#crearPregunta").hide();
            $("#verPreguntas").hide();
            $("#modificarPreguntas").hide();   
            $("#eliminarPreguntas").hide();
            $('#enviarEncuesta').show();
        }
        function enviarEncuesta(){
            email_usuario = document.getElementById("email_usuario").value;
            console.log(email_usuario);
            if(!validarEmail(email_usuario)){
                Materialize.toast('Email Incorrecto', 4000); 
            }else{
                var xmlhttp = new XMLHttpRequest();
                var url = "../php/asignarEncuesta.php?id_encuesta="+id_encuesta+"&correo="+email_usuario;
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
                    if(arr.success == 1){
                        //Materialize.toast('Encuesta Asignada', 4000);

                        var xmlhttp = new XMLHttpRequest();
                        var url = "../php/correo/enviarCorreo.php";
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
                            if(arr.success == 1){
                                Materialize.toast('Encuesta Asignada', 4000);
                            }
                            else{
                                Materialize.toast('Problema notificando al usuario', 4000);
                            }
                        }

                    }else{
                        Materialize.toast('Error asignando encuesta', 4000);
                    }
                }//myFunction
            }//else
        }//enviarEncuesta
        function validarEmail( email ) {
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if ( !expr.test(email) ){
                //alert("Error: La dirección de correo " + email + " es incorrecta.");
                //Materialize.toast('Email Incorrecto', 4000); 
                return false;
            }else{
                return true;
            }
        }//validarEmail
        function verAgregarPregunta(){
            $("#crearPregunta").show();
            $("#verPreguntas").hide();
            $("#modificarPreguntas").hide();   
            $("#eliminarPreguntas").hide();
            $('#enviarEncuesta').hide();

        }
        function verVerPreguntas(){
            $("#crearPregunta").hide();
            $("#verPreguntas").show();
            $("#modificarPreguntas").hide();   
            $("#eliminarPreguntas").hide();
            $('#enviarEncuesta').hide();


            var out = "";
            $("#encuesta").prepend(out);
            document.getElementById("encuesta").innerHTML = "";

            var xmlhttp = new XMLHttpRequest();
            var url = "../php/verEncuestaCompleta.php?id_encuesta="+id_encuesta;
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

                //console.log(arr);
                for(var i = 0; i < arr.preguntas.length; i++) {
                    out += "<p><b>"+arr.preguntas[i].pregunta+"</b></p>";
                    //console.log("pregunta: "+arr.preguntas[i].pregunta);
                    if(arr.preguntas[i].respuesta != null){
                        //console.log(arr.preguntas[i].respuesta.length);
                        for(var a=0; a < arr.preguntas[i].respuesta.length; a++){
                            //console.log("id respuesta: "+arr.preguntas[i].respuesta[a].id_respuesta_tipo);
                            //console.log("respuesta: "+arr.preguntas[i].respuesta[a].respuesta);
                            if(arr.preguntas[i].respuesta[a].respuesta == "Comentario"){
                                out += "<div class='input-field col s12'><textarea id='textarea1' class='materialize-textarea'></textarea><label for='textarea1'>Comentario</label></div>";
                            }else{
                                out += '<p><input name="group1" type="radio" id="'+arr.preguntas[i].respuesta[a].id_respuesta_tipo+'" /><label for="'+arr.preguntas[i].respuesta[a].id_respuesta_tipo+'">'+arr.preguntas[i].respuesta[a].respuesta+'</label></p>';
                            }
                        }//for
                        out += "<br>";
                    }//if
                    else{
                        //no tiene respuesta
                        out += '<p>No tiene Respuesta.</p>';
                    }
                    out += "<br>";
                }//for
                out+="<br>";
                $("#encuesta").prepend(out);
            }//myFunction
        }//verVerPreguntas
        function verModificarPregunta(){
            $("#crearPregunta").hide();
            $("#verPreguntas").hide();
            $("#modificarPreguntas").show();   
            $("#eliminarPreguntas").hide();
        }
         function verEliminarPregunta(){
            $("#crearPregunta").hide();
            $("#verPreguntas").hide();
             $("#modificarPreguntas").hide();   
             $("#eliminarPreguntas").show();
         }       
        //---------------- Contenido Encuesta -----------------

        //---------------- ver Preguntas -----------------


        //---------------- ver Preguntas -----------------


        //---------------- Agregar Pregunta -----------------
        var tipo_respuesta = false;

        $("#switch_tipo_respuesta").click(function() {
            tipo_respuesta = $("#switch_tipo_respuesta").is(':checked');
            if(tipo_respuesta == true){
                //seleccion
                console.log("switch true");
                $("#respuesta_seleccion").show();
                $("#respuesta_comentario").hide();
            }else{
                //comentario
                console.log("switch false");
                $("#respuesta_seleccion").hide();
                $("#respuesta_comentario").show();
            }
        });

        function volver(){
            $("#verEncuesta").show();
            $("#contenidoEncuesta").hide();

        }

        function agregarPregunta(){
            var pregunta = document.getElementById("pregunta").value;
            var tipoRespuesta = null;
            if(pregunta){
                //console.log("id encuesta: "+ id_encuesta);
                //console.log("id usuario: " + id_usuario);
                //console.log("pregunta: "+pregunta);
                if(tipo_respuesta){//respuesta de selección
                    //console.log("respuesta tipo seleccion");
                    tipoRespuesta = "seleccion";
                    var respuesta_1 = document.getElementById("respuesta_1").value;
                    var respuesta_2 = document.getElementById("respuesta_2").value;
                    var respuesta_3 = document.getElementById("respuesta_3").value;
                    var respuesta_4 = document.getElementById("respuesta_4").value;
                    var respuesta_5 = document.getElementById("respuesta_5").value;
                    var respuesta_6 = document.getElementById("respuesta_6").value;
                    var respuesta_7 = document.getElementById("respuesta_7").value;

                    // console.log("respuesta _1 : "+respuesta_1);
                    // console.log("respuesta _2 : "+respuesta_2);
                    // console.log("respuesta _3 : "+respuesta_3);
                    // console.log("respuesta _4 : "+respuesta_4);
                    // console.log("respuesta _5 : "+respuesta_5);
                    // console.log("respuesta _6 : "+respuesta_6);
                    // console.log("respuesta _7 : "+respuesta_7);  

                }else{//respuesta de comentario
                    //console.log("respuesta tipo comentario");
                    tipoRespuesta = "comentario";
                }


                var conexion;
                if (window.XMLHttpRequest){
                    conexion = new XMLHttpRequest();
                }
                else{
                    conexion = new ActiveXObject("Microsoft.XMLHTTP");
                }
                conexion.onreadystatechange=function(){
                    if (conexion.readyState==4 && conexion.status==200){
                            Materialize.toast('Pregunta guardada correctamente', 4000) // 4000 is the duration of the toast
                            if(tipoRespuesta == "seleccion"){
                                // Limpiando formulario
                                document.getElementById("pregunta").value ="";
                                document.getElementById("respuesta_1").value = "";
                                document.getElementById("respuesta_2").value = "";
                                document.getElementById("respuesta_3").value = "";
                                document.getElementById("respuesta_4").value = "";
                                document.getElementById("respuesta_5").value = "";
                                document.getElementById("respuesta_6").value = "";
                                document.getElementById("respuesta_7").value = "";
                                // Limpiando formulario
                            }else{
                                document.getElementById("pregunta").value ="";
                            }
                            //console.log("../php/guardarPregunta.php?id_usuario="+id_usuario+"&id_encuesta="+id_encuesta+"&pregunta="+pregunta+"&tipo_respuesta="+tipoRespuesta+"&respuesta_1="+respuesta_1+"&respuesta_2="+respuesta_2+"&respuesta_3="+respuesta_3+"&respuesta_4="+respuesta_4+"&respuesta_5="+respuesta_5+"&respuesta_6="+respuesta_6+"&respuesta_7="+respuesta_7);
                        }else{
                            //Materialize.toast('Vuelva a intentarlo', 4000) // 4000 is the duration of the toast
                        }
                    }
                    conexion.open("GET","../php/guardarPregunta.php?id_usuario="+id_usuario+"&id_encuesta="+id_encuesta+"&pregunta="+pregunta+"&tipo_respuesta="+tipoRespuesta+"&respuesta_1="+respuesta_1+"&respuesta_2="+respuesta_2+"&respuesta_3="+respuesta_3+"&respuesta_4="+respuesta_4+"&respuesta_5="+respuesta_5+"&respuesta_6="+respuesta_6+"&respuesta_7="+respuesta_7,true);
                    conexion.send();

                }else{
                Materialize.toast('Debe crear una pregunta', 4000) // 4000 is the duration of the toast
                }
            }
        //---------------- Agregar Pregunta -----------------
</script>




















