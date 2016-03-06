<div id="verResultadoEncuesta" class="col s12 m12 l12">
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

<script type="text/javascript">
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


        function verEncuestaPorId(idEncuesta){
        	console.log("user: "+id_usuario);
        	console.log("encuesta: "+idEncuesta);
        }

</script>