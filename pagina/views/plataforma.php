<?
session_start();
//echo $_SESSION["nombre_usuario"];
  if(!isset($_SESSION["nombre_usuario"])){
      //se redirecciona a la pagina principal
      header("location: ../index.php");
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
        <title>Plataforma de encuestas</title>
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!--  Android 5 Chrome Color-->
        <meta name="theme-color" content="#EE6E73">

        <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- CSS-->
        <link href="../css/prism.css" rel="stylesheet">
        <link href="../css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">


        <!--  Scripts-->
        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../js/jquery.timeago.min.js"></script>  
        <script src="../js/prism.js"></script>
        <script src="../bin/materialize.js"></script>

        <script>
            $( document ).ready(function(){
                $(".button-collapse").sideNav();

//                 $("#inicio").click(function(){

// document.getElementById("inicio_div").innerHTML='<object class="col s12 m12 l12" type="text/html" data="graficos.php" ></object>';

//                     // $("#inicio_div").load("graficos.php #inicio_div");
//                     // return false;
//                 });
            });


        </script>

                <!-- GRAFICOS GOOGLE -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>

        <!-- Base de controladores -->
        
        <script type="text/javascript" src="../controlers/base.js"></script>

    </head>

    <body>

        <header>
            <nav>
                <div class="container">
                    <div class="nav-wrapper">
                        <ul class="right hide-on-med-and-down">
                            <!--
<li><a href="sass.html">Sass</a></li>
<li><a href="badges.html">Components</a></li>
-->
                            <li><a href="../php/cerrar.php">Cerrar Sesión</a></li>
                        </ul>

                        <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
                    </div>
                </div>
            </nav>


            <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
                <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
                    <object id="front-page-logo" type="image/svg+xml" data="../res/materialize.svg">Your browser does not support SVG</object></a></li>
                <li class="bold"><a id="inicio" href="#" class="waves-effect waves-teal">Inicio</a></li>
                <li class="bold"><a id="crear_encuestas" href="#" class="waves-effect waves-teal">Crear encuestas</a></li>
                <li class="bold"><a id="ver_encuestas" href="#" class="waves-effect waves-teal">Ver encuestas</a></li>
                <li class="bold"><a id="ver_resultados" href="#" class="waves-effect waves-teal">Ver resultados</a></li>
            </ul>
        </header>

        <main>
            <div class="row">
                
              <div id="inicio_div" >
                   <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4">Inicio</span>
                            </div>
                        </div>
                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Gráfico Por País</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.load("visualization", "1", {packages:["geochart"]});
                                            google.setOnLoadCallback(drawRegionsMap);
                                            function drawRegionsMap() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Country', 'Popularity'],
                                                    ['Germany', 200],
                                                    ['United States', 300],
                                                    ['Brazil', 400],
                                                    ['Canada', 500],
                                                    ['France', 600],
                                                    ['RU', 700]
                                                ]);
                                                var options = {};
                                                var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
                                                chart.draw(data, options);
                                            }
                                        </script>
                                        <div id="regions_div" style="width: 900px; height: 500px;"></div>      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Gráfico de columnas</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.load("visualization", "1.1", {packages:["bar"]});
                                            google.setOnLoadCallback(drawChart2);
                                            function drawChart2() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Year', 'Sales', 'Expenses', 'Profit'],
                                                    ['2014', 1000, 400, 200],
                                                    ['2015', 1170, 460, 250],
                                                    ['2016', 660, 1120, 300],
                                                    ['2017', 1030, 540, 350]
                                                ]);

                                                var options = {
                                                    chart: {
                                                        title: 'Company Performance',
                                                        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                                                    }
                                                };

                                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                        <div id="columnchart_material" style="width: 900px; height: 500px;"></div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Pie Gráfico</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.load("visualization", "1", {packages:["corechart"]});
                                            google.setOnLoadCallback(drawChart);
                                            function drawChart() {

                                                var data = google.visualization.arrayToDataTable([
                                                    ['Task', 'Hours per Day'],
                                                    ['Work',     11],
                                                    ['Eat',      2],
                                                    ['Commute',  2],
                                                    ['Watch TV', 2],
                                                    ['Sleep',    7]
                                                ]);

                                                var options = {
                                                    title: 'My Daily Activities'
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                        <div id="piechart" style="width: 900px; height: 500px;"></div>                               
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Gráfico de barras</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.load('visualization', '1', {packages: ['corechart', 'bar']});
                                            google.setOnLoadCallback(drawMultSeries);

                                            function drawMultSeries() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['City', '2010 Population', '2000 Population'],
                                                    ['New York City, NY', 8175000, 8008000],
                                                    ['Los Angeles, CA', 3792000, 3694000],
                                                    ['Chicago, IL', 2695000, 2896000],
                                                    ['Houston, TX', 2099000, 1953000],
                                                    ['Philadelphia, PA', 1526000, 1517000]
                                                ]);

                                                var options = {
                                                    title: 'Population of Largest U.S. Cities',
                                                    chartArea: {width: '50%'},
                                                    hAxis: {
                                                        title: 'Total Population',
                                                        minValue: 0
                                                    },
                                                    vAxis: {
                                                        title: 'City'
                                                    }
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));
                                                chart.draw(data, options);
                                            }
                                        </script>
                                        <div id="bar_chart" style="width: 900px; height: 500px;"></div>                               
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Gráfico de lineas</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.load('visualization', '1.1', {packages: ['line']});
                                            google.setOnLoadCallback(drawChart3);

                                            function drawChart3() {

                                                var data2 = new google.visualization.DataTable();
                                                data.addColumn('number', 'Day');
                                                data.addColumn('number', 'Guardians of the Galaxy');
                                                data.addColumn('number', 'The Avengers');
                                                data.addColumn('number', 'Transformers: Age of Extinction');

                                                data2.addRows([
                                                    [1,  37.8, 80.8, 41.8],
                                                    [2,  30.9, 69.5, 32.4],
                                                    [3,  25.4,   57, 25.7],
                                                    [4,  11.7, 18.8, 10.5],
                                                    [5,  11.9, 17.6, 10.4],
                                                    [6,   8.8, 13.6,  7.7],
                                                    [7,   7.6, 12.3,  9.6],
                                                    [8,  12.3, 29.2, 10.6],
                                                    [9,  16.9, 42.9, 14.8],
                                                    [10, 12.8, 30.9, 11.6],
                                                    [11,  5.3,  7.9,  4.7],
                                                    [12,  6.6,  8.4,  5.2],
                                                    [13,  4.8,  6.3,  3.6],
                                                    [14,  4.2,  6.2,  3.4]
                                                ]);

                                                var options = {
                                                    chart: {
                                                        title: 'Box Office Earnings in First Two Weeks of Opening',
                                                        subtitle: 'in millions of dollars (USD)'
                                                    },
                                                    width: 900,
                                                    height: 500
                                                };

                                                var chart = new google.charts.Line(document.getElementById('curve_chart'));

                                                chart.draw(data2, options);
                                            }
                                        </script>
                                        <div id="curve_chart" style="width: 900px; height: 500px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Gráfico de tendencias</p>
                                    <div class="col s12 m12 l12">
                                        <script>
                                            google.setOnLoadCallback(drawChart);
                                            function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Age', 'Weight'],
                                                    [ 8,      12],
                                                    [ 4,      5.5],
                                                    [ 11,     14],
                                                    [ 4,      5],
                                                    [ 3,      3.5],
                                                    [ 6.5,    7]
                                                ]);

                                                var options = {
                                                    title: 'Age vs. Weight comparison',
                                                    legend: 'none',
                                                    crosshair: { trigger: 'both', orientation: 'both' },
                                                    trendlines: {
                                                        0: {
                                                            type: 'polynomial',
                                                            degree: 3,
                                                            visibleInLegend: true,
                                                            color: 'green',
                                                        }
                                                    }
                                                };

                                                var chart = new google.visualization.ScatterChart(document.getElementById('polynomial2_div'));
                                                chart.draw(data, options);
                                            }
                                        </script>
                                        <div id='polynomial2_div' style='width: 900px; height: 500px;'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

              </div>

                <div id="crear_encuesta_div">
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
                                            <div class="input-field col s8 m8 l8">
                                                <input id="nombre_encuesta" type="text" class="validate">
                                                <label for="nombre_encuesta">Nombre Encuesta</label>
                                            </div>
                                            <div class="col s4 m4 l4">
                                                <br>
                                                <a class="waves-effect waves-light btn">Guardar Nombre</a>
                                            </div>
                                        </div>
                                        <br><br>
                                        <p>Crear Preguntas</p>
                                        <div class="row">
                                            <div class="input-field col s12 m12 l12">
                                                <input id="pregunta" type="text" class="validate">
                                                <label for="pregunta">Pregunta</label>
                                            </div>
                                        </div>

                                        <div class="row">
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
                                                    <script>
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
                                                    </script>

                                                    <div id="respuesta_seleccion" class="col s12 m12 l12" style="display:none">
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_1" type="text" class="validate">
                                                            <label for="respuesta_1">Respuesta_1</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_2" type="text" class="validate">
                                                            <label for="respuesta_2">respuesta_2</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_3" type="text" class="validate">
                                                            <label for="respuesta_3">respuesta_3</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_4" type="text" class="validate">
                                                            <label for="respuesta_4">respuesta_4</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_5" type="text" class="validate">
                                                            <label for="respuesta_5">respuesta_5</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_6" type="text" class="validate">
                                                            <label for="respuesta_6">respuesta_6</label>
                                                        </div>
                                                        <div class="input-field col s12 m12 l12">
                                                            <input id="respuesta_7" type="text" class="validate">
                                                            <label for="respuesta_7">respuesta_7</label>
                                                        </div>
                                                    </div>

                                                    <div id="respuesta_comentario" class="col s12 m12 l12">
                                                        <div class="input-field col s12 m12 l12">
                                                            <input disabled id="respuesta_comentario" type="text" class="validate">
                                                            <label for="respuesta_comentario">respuesta_comentario</label>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="col s12 m12 l12">
                                                        <a class="waves-effect waves-light btn">Agregar esta Pregunta</a>
                                                    </div>

                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ver_encuesta_div">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4">Ver Encuesta</span>
                            </div>
                        </div>
                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Ver Encuesta</p>
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
                            </div>
                        </div>
                    </div>
                </div>

                <div id="ver_resultados_div">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4">Ver resultados</span>
                            </div>
                        </div>
                        <div class="card z-depth-3">
                            <div class="card-content">
                                <div>
                                    <p>Ver resultados</p>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </body>
</html>



























