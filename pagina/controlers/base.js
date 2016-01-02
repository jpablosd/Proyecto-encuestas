$(document).ready(function() {
    //console.log( "ready!" );
    init();
});

function init(){
    console.log("init");

    $("#inicio").click(function(){
        console.log("inicio click");
        $('#inicio_div').show();
        $("#crear_encuesta_div").hide();
        $("#ver_encuesta_div").hide();
        $("#ver_resultados_div").hide();
    });

    $("#crear_encuestas").click(function(){
        console.log("crear_encuestas click");
        $('#inicio_div').hide();
        $("#crear_encuesta_div").show();
        $("#ver_encuesta_div").hide();
        $("#ver_resultados_div").hide();
    });

    $("#ver_encuestas").click(function(){
        console.log("ver_encuestas click");
        $('#inicio_div').hide();
        $("#crear_encuesta_div").hide();
        $("#ver_encuesta_div").show();
        $("#ver_resultados_div").hide();
    });

    $("#ver_resultados").click(function(){
        console.log("ver_resultados click");
        $('#inicio_div').hide();
        $("#crear_encuesta_div").hide();
        $("#ver_encuesta_div").hide();
        $("#ver_resultados_div").show();
    });

}
