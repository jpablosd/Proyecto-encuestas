$(document).ready(function() {
	$(".button-collapse").sideNav();
	init();
	cargarContenido("cargarGrafico");
});



function cargarContenido(contenido){
	if(contenido == "cargarGrafico"){
		$(".contenido").load("graficos/");
	}
	else if(contenido == "crearEncuesta"){
		$(".contenido").load("crearEncuesta/");
	}
	else if(contenido == "cargarEncuesta"){
		$(".contenido").load("verEncuesta/");
	}
	else if(contenido == "cargarResultados"){
		$(".contenido").load("verResultados/");
	}
}//cargarContenido

function init(){

}//init




























