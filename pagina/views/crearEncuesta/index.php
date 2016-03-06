<div class="col s12 m12 l12">
	<div class="card">
		<div class="card-content">
			<span class="card-title grey-text text-darken-4">Crear Encuesta</span>
		</div>
	</div>
	<div class="card z-depth-3">
		<div class="card-content">
			<div>
				<p>Crear Encuesta</p>
				<br><br>
				<form class="col s12 m12 l12">
					<div class="row">
						<div class="input-field col s10 m10 l10">
							<input id="nombre_encuesta" type="text" class="validate">
							<label for="nombre_encuesta">Nombre Encuesta</label>
						</div>
						<div class="col s2 m2 l2">
							<br>
							<a class="waves-effect waves-light btn" onclick="guardarEncuesta()">Guardar Encuesta</a>
						</div>
						<div class="input-field col s12 m12 l12">
							<input id="descripcion_encuesta" type="text" class="validate">
							<label for="descripcion_encuesta">Descripción Encuesta</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
function guardarEncuesta(){
	var id_usuario = idEmpresa;
	var nombre_encuesta = document.getElementById("nombre_encuesta").value;  
	var descripcion_encuesta = document.getElementById("descripcion_encuesta").value;

	if(nombre_encuesta != ""){
		console.log("id usuario: "+ id_usuario);
		console.log("nombre encuesta: " + nombre_encuesta);
		console.log("descripcion encuesta: "+descripcion_encuesta);   

		var conexion;
		if (window.XMLHttpRequest){
			conexion = new XMLHttpRequest();
		}
		else{
			conexion = new ActiveXObject("Microsoft.XMLHTTP");
		}
		conexion.onreadystatechange=function(){
			if (conexion.readyState==4 && conexion.status==200){
					Materialize.toast('Encuesta guardada correctamente', 4000) // 4000 is the duration of the toast
					document.getElementById("nombre_encuesta").value = "";  
					document.getElementById("descripcion_encuesta").value = "";
				}else{
					//Materialize.toast('Vuelva a intentarlo', 4000) // 4000 is the duration of the toast
				}
			}
			conexion.open("GET","../php/guardarEncuesta.php?nombre_encuesta="+nombre_encuesta+"&descripcion_encuesta="+descripcion_encuesta+"&id_usuario="+id_usuario,true);
			conexion.send();

		}
		else{
			Materialize.toast('Debe tener un nombre la encuesta', 4000) // 4000 is the duration of the toast
		}
}//guardarEncuesta
</script>