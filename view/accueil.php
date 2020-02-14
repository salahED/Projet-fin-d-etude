<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/style3.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<style type="text/css">
.accueil > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #009fee;
}

 #cssmenu > ul > .accueil > a{
  color: #ffffff;
}
</style>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Annee', 'Nombre de morts'],
          ['2014',     3984],
          ['2015',      3801],
          ['2016',  3992],
          ['2017', 3639],
          ['2018',    3091]
        ]);

        var options = {
          title: 'Nombre de decés par année',
          'legend':'left',
          'is3D':true,
          width: 400, 
          height: 300
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
	  
	       google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Année');
        data.addColumn('number', 'Nombre de blessés');
        data.addRows([
       /*   [2012, 34546],  [2014, 44546],
          [2013, 54546], */
          [2014, 44546],
          [2015, 36657],
          [2016,42652],
          [2017, 36287],
          [2018, 30561]
        ]);

  var options = {
          title: 'Nombre de blesses par année',
          'legend':'bottom',
          
          
        };
        var table = new google.visualization.LineChart(document.getElementById('table_div'));

        table.draw(data,options);
      }
	  
	  
	  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBarColors);

function drawBarColors() {
      var data = google.visualization.arrayToDataTable([
        ['Anné', 'Femme', 'Homme'],
        ['2011', 1500, 1600],
        ['2012', 1200, 2500],
        ['2013', 500, 1200],
        ['2014', 700, 1500],
        ['2015', 1300, 1500]
      ]);

      var options = {
        title: 'Nombre de déces par genre',

          width: 450, height: 300,
        
        colors: ['#b0120a', '#ffab91'],
        hAxis: {
          title: 'Total déces',
          minValue: 0
        },
        vAxis: {
          title: 'Année'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
	  
    </script>
	
	
</head>
<body class="is-boxed has-animations">
	  <?php include 'menu.php' ?>
    <div class="body-wrap boxed-container"  style="margin-top: 10px">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                                
                              
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title h2-mobile mt-0 is-revealing">Bienvenue à PAA</h1>
                            <p class="hero-paragraph is-revealing">Plateforme dediée à l'Analyse de l'Accidentologie routière en Algérie</p>
                        </div>
                        <div class="hero-illustration is-revealing">
                            <svg width="528" height="413" viewBox="0 0 528 413" xmlns="http://www.w3.org/2000/svg">
                               
                            </svg>
                            <img src="img/img1.jpg" id="img">
                        </div>
                    </div>
                </div>
            </section>
<section>
  

  <div id="container">
    <div class="child" id="piechart"></div>
    <div class="child" id="table_div">
   </div>
    <div class="child" id="chart_div"></div>
</div>
</section>

        </main>

    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
