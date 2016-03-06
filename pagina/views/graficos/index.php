
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
                            google.setOnLoadCallback(drawRegionsMap());
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
                            google.setOnLoadCallback(drawChartColumn());
                            function drawChartColumn() {
                                var dataColumn = google.visualization.arrayToDataTable([
                                    ['Year', 'Sales', 'Expenses', 'Profit'],
                                    ['2014', 1000, 400, 200],
                                    ['2015', 1170, 460, 250],
                                    ['2016', 660, 1120, 300],
                                    ['2017', 1030, 540, 350]
                                    ]);

                                var optionsColumn = {
                                    chart: {
                                        title: 'Company Performance',
                                        subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                                    }
                                };

                                var chartColumn = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chartColumn.draw(dataColumn, optionsColumn);
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
                            google.setOnLoadCallback(drawChart());
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
                            google.setOnLoadCallback(drawMultSeries());

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
                            google.setOnLoadCallback(drawChart3());

                            function drawChart3() {

                                var data2Lines = new google.visualization.DataTable();
                                data2Lines.addColumn('number', 'Day');
                                data2Lines.addColumn('number', 'Guardians of the Galaxy');
                                data2Lines.addColumn('number', 'The Avengers');
                                data2Lines.addColumn('number', 'Transformers: Age of Extinction');

                                data2Lines.addRows([
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

                                var options2Lines = {
                                    chart: {
                                        title: 'Box Office Earnings in First Two Weeks of Opening',
                                        subtitle: 'in millions of dollars (USD)'
                                    },
                                    width: 900,
                                    height: 500
                                };

                                var chart2Lines = new google.charts.Line(document.getElementById('curve_chart'));

                                chart2Lines.draw(data2Lines, options2Lines);
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
                            google.setOnLoadCallback(drawChart());
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

