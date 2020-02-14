<!DOCTYPE html>
<html>
<head>
  <title>Tableau de bord </title>
   <link rel="stylesheet" href="../css/styleTB.css">
   <link href="dist/attention.css" rel="stylesheet">
<script type="text/javascript" src="../js/js_f2.js"></script>
<script type="text/javascript" src="../js/jsSpatial1.js"></script>
    <script type="text/javascript" src="../js/loder.js"></script>
    <script type="text/javascript" src="../js/oraclemaps.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="../css/style_radio.css">
</head>
<style type="text/css">
 
   .intro {
            position: relative;
            text-align: center;
            padding: 100px 20px;
        }
        .examples {
            position: relative;
            text-align: center;
            padding: 0 20px;
        }
        /*  .examples .button {
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
        }*/
   .examples .new-alert {
            background-color: #143642;
        }
        .examples .new-prompt {
            background-color: #EC9A29;
        }
        .examples .new-confirm {
            background-color: #A8201A;
        }

   #tab  {
  border-collapse: collapse;
  margin-left: 10px; 
  margin-top: 1%;


</style>
<script type="text/javascript">
function fprint() {
  window.print();
}

  function cc() {

document.getElementById("sect_resultatTB").style.visibility="visible";
<?php
$pa_choix=$_POST['choix_pa'];
?>
nom_pa="<?php echo $pa_choix ?>";


if(nom_pa=="Graphe"){

tableau();
  <?php

$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;


$con=oci_connect("admin","oracle12C","localhost/orcl");

$query = $reqq;

$execution_debut = microtime(true);
$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$temps_execution = microtime(true) - $execution_debut;
$ncols = oci_num_fields($stid);

?>
   
temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');
nom_req="<?php echo $nom ?>";


document.getElementById("titre_reqTB").innerHTML=nom_req;
  var nbcol="<?php echo $ncols ?>";

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
         function drawChart(){
         

            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['',''],
                <?php


        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
                       while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
      $text ="['".$row[0]."', ".$row[1]."],";
      $text=str_replace(array("\n", "\r"), '', $text);
                     echo nl2br($text);
            }
          
                    }

                ?>
               ]);

            var options = {
                title: '',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('areachart'));
            chart.draw(data, options);
        }
    }
    
if (nom_pa=="Tableau") {
   document.getElementById('areachart').style.height="100%";


  document.getElementById('myCheck').style.visibility="visible";
    document.getElementById('lab').style.visibility="visible";
<?php

$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);
?>
nom_req="<?php echo $nom ?>";

document.getElementById("titre_reqTB").innerHTML=nom_req;
<?php
while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;

$con=oci_connect("admin","oracle12C","localhost/orcl");

$query = $reqq;

$execution_debut = microtime(true);
$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$temps_execution = microtime(true) - $execution_debut;
$ncols = oci_num_fields($stid);
    $column_name  = oci_field_name($stid, 1);
    $column_name2  = oci_field_name($stid, 2);


$un="";$deux="";$trois="";
     while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
          

         $un=$un.$row[0].",";
                  $un=str_replace(array("\n", "\r"), '', $un);
          $deux=$deux.$row[1].",";

$deux=str_replace(array("\n", "\r"), '', $deux);
                    }

?>
temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');
un="<?php echo nl2br($un) ?>";deux="<?php echo nl2br($deux) ?>";
c1="<?php echo $column_name ?>";c2="<?php echo $column_name2 ?>";
tab1=un.split(',');tab2=deux.split(',');

tab2_max=deux.split(',').map(function(item) {
    return parseInt(item, 10);
});
element = tab2_max.pop();
max=Math.max.apply(null,tab2_max);

str="<table id='tab'> <tr><th>"+c1+"</th><th>"+c2+"</th></tr>";
for(i=0;i<(tab2.length)-1;i++){
  if (parseInt(tab2[i])==max) {
str=str+"<tr class='max'>";
  }else{
    str=str+"<tr>";
  }

str=str+"<td>"+tab1[i]+"</td>";

str=str+"<td>"+tab2[i]+"</td>";


str=str+"</tr>";

}
str=str+"</table>";

document.getElementById('areachart').innerHTML=str;

}
if(nom_pa=="Camembert"){
  tableau();
  <?php
$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;


$con=oci_connect("admin","oracle12C","localhost/orcl");

$query = $reqq;

$execution_debut = microtime(true);
$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$temps_execution = microtime(true) - $execution_debut;
$ncols = oci_num_fields($stid);

?>
temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');

  var nbcol="<?php echo $ncols ?>";
   
nom_req="<?php echo $nom ?>";


document.getElementById("titre_reqTB").innerHTML=nom_req;

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);
         function drawChart(){
         

            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['',''],
                <?php

    while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
      $text ="['".$row[0]."', ".$row[1]."],";
      $text=str_replace(array("\n", "\r"), '', $text);
                     echo nl2br($text);
            }
 
                ?>
               ]);

            var options = {
              'is3D':true,
                 width:700,
                height:500,
                title: '',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.PieChart(document.getElementById('areachart'));
         chart.draw(data, options);

        }
    
}



    if(nom_pa=="Nuage"){
tableau();
  <?php
$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;


$con=oci_connect("admin","oracle12C","localhost/orcl");

$execution_debut = microtime(true);
$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$temps_execution = microtime(true) - $execution_debut;

$rs=oci_execute($stid);
$ncols = oci_num_fields($stid);

?>
temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');
  var nbcol="<?php echo $ncols ?>";
   
nom_req="<?php echo $nom ?>";

document.getElementById("titre_reqTB").innerHTML=nom_req;

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawTable);
         function drawTable(){
         

            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['',''],
                <?php
         while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
      $text ="['".$row[0]."', ".$row[1]."],";
      $text=str_replace(array("\n", "\r"), '', $text);
                     echo nl2br($text);
            }
  
                ?>
               ]);

            var options = {
                title: '',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.ScatterChart(document.getElementById('areachart'));

        chart.draw(data, options);

        }
    }

    if(nom_pa=="Barre"){
tableau();
  <?php
$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;


$con=oci_connect("admin","oracle12C","localhost/orcl");

$query = $reqq;

$execution_debut = microtime(true);
$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$temps_execution = microtime(true) - $execution_debut;
$ncols = oci_num_fields($stid);

?>
  var nbcol="<?php echo $ncols ?>";
   temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');
nom_req="<?php echo $nom ?>";

document.getElementById("titre_reqTB").innerHTML=nom_req;

       google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);
       function drawMaterial() {
         

            var data = new google.visualization.DataTable();
            var data = google.visualization.arrayToDataTable([
                ['',''],
                <?php
        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
      $text ="['".$row[0]."', ".$row[1]."],";
      $text=str_replace(array("\n", "\r"), '', $text);
                     echo nl2br($text);
            }
  
                ?>
               ]);

           var materialOptions = {
              width:700,
        chart: {
       
        },
        hAxis: {
          title: '',
          minValue: 0,
        },
        vAxis: {
          title: ''
        },
        bars: 'vertical'
      };
      var materialChart = new google.charts.Bar(document.getElementById('areachart'));
      materialChart.draw(data, materialOptions);


        }
    }


  if(nom_pa=="Carte"){
  	document.getElementById("rec").style.visibility="visible";
    tableau();
      <?php
$nom=$_POST['titre_requete'];
?>
nom_req="<?php echo $nom ?>";

document.getElementById("titre_reqTB").innerHTML=nom_req;
 showMap(nom_req);
    }

  
}

function tableau(){
document.getElementById('myCheck').style.visibility="visible";
    document.getElementById('lab').style.visibility="visible";
<?php

$nom=$_POST['titre_requete'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);
?>
nom_req="<?php echo $nom ?>";

document.getElementById("titre_reqTB").innerHTML=nom_req;
<?php
while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];

}

$reqq=$req;

$con=oci_connect("admin","oracle12C","localhost/orcl");

$query = $reqq;

$stid = oci_parse($con, $query); 

$rs=oci_execute($stid);
$ncols = oci_num_fields($stid);
    $column_name  = oci_field_name($stid, 1);
    $column_name2  = oci_field_name($stid, 2);


$un="";$deux="";$trois="";
     while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
          

         $un=$un.$row[0].",";
                  $un=str_replace(array("\n", "\r"), '', $un);
          $deux=$deux.$row[1].",";

$deux=str_replace(array("\n", "\r"), '', $deux);
                    }

?>

un="<?php echo nl2br($un) ?>";deux="<?php echo nl2br($deux) ?>";
c1="<?php echo $column_name ?>";c2="<?php echo $column_name2 ?>";
tab1=un.split(',');tab2=deux.split(',');

tab2_max=deux.split(',').map(function(item) {
    return parseInt(item, 10);
});
element = tab2_max.pop();
max=Math.max.apply(null,tab2_max);





tab2_min=deux.split(',').map(function(item) {
    return parseInt(item, 10);
});
element2 = tab2_min.pop();
min=Math.min.apply(null,tab2_min);
str="<table id='tab' style='width:100%;'> <tr><th>"+c1+"</th><th>"+c2+"</th></tr>";
for(i=0;i<(tab2.length)-1;i++){
str=str+"<tr>";
str=str+"<td>"+tab1[i]+"</td>";

str=str+"<td>"+tab2[i]+"</td>";


str=str+"</tr>";

}

str=str+"</table>";

document.getElementById('tab').innerHTML=str;
}

var mapview;
  
  function showMap(nom_req)
  {     
      document.getElementById('areachart').style.visibility="visible";
     document.getElementById('check').style.visibility="visible";
      document.getElementById('Labcheck').style.visibility="visible";
      var theme=mapr.get(nom_req);
//alert(theme);
  var baseURL  = "http://localhost:7001/mapviewer";
  var mapCenterLon = 3.090;
    var mapCenterLat =  36.696;
    var mapZoom =  3;  
    var mpoint = MVSdoGeometry.createPoint(mapCenterLon,mapCenterLat,8307);
    mapview = new MVMapView(document.getElementById("areachart"), baseURL);
    mapview.addMapTileLayer(new MVMapTileLayer("mvdemo.BACHGROUND_COMMUNE"));   
    mapview.setCenter(mpoint);   
    mapview.setZoomLevel(mapZoom);
    
  
    /* Use a custom info window style for theme info windows */
  var salah="mvdemo."+theme;
  
  themebasedfoi = new MVThemeBasedFOI('themebasedfoi1',salah);
  themebasedfoi.setBringToTopOnMouseOver(true);
    themebasedfoi.enableLabels(true);
  themebasedfoi.setVisible(true) ;
  mapview.addThemeBasedFOI(themebasedfoi);
  themebasedfoi.attachEventListener(MVEvent.MOUSE_CLICK, foiClick); 
  MVMapView.enableCodingHints(false);
  //OVERVIEW of the map 
  ovcontainer = new MVMapDecoration(null,null,null,200,150) ;
  ovcontainer.setCollapsible(true); 
  mapview.addMapDecoration(ovcontainer);
  var over=new MVOverviewMap(ovcontainer.getContainerDiv(), 6);
  mapview.addOverviewMap(over);
  
  //navigation panel
  mapview.setHomeMap(mpoint, mapZoom);
  //mapview.addNavigationPanel("EAST");
  var nav = new MVNavigationPanel('east') ;
  nav.setZoomLevelInfoTips({0:"x0", 3:"x3", 6:"x6", 9:"x9"}) ;
  navPan = new MVMapDecoration(nav,0,0,null,null,970,4) ;
  mapview.addMapDecoration(navPan) ;
  
    /* Change the default info window style */
  var html = buildLegend(baseURL);
  legend = new MVMapDecoration(html,null,null,1035,60);
    legend.setCollapsible(false);
    mapview.addMapDecoration(legend);
  /**********/
 // Create a tool bar that shows all builtin tool buttons.
  toolbar = new MVToolBar("toolbar1",[MVToolBar.BUILTIN_ALL]);
  toolbar.setPosition(0.45,0.05);
  mapview.addToolBar(toolbar);
  
  // Add event handlers to the builtin tools.
  var circleTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_CIRCLE) ;
  circleTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Circle tool is finished!");
  })

  var rectangleTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_RECTANGLE) ;
  rectangleTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Rectangle tool is finished!");
  })
  var redlineTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_REDLINE) ;
  redlineTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Redline tool is finished!");
  })
  var distanceTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_DISTANCE) ;
  distanceTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Distance tool is finished!");
  })
  /**/
  mapview.addScaleBar('east');
    mapview.display();  
      
  }
  

  function foiClick(point,foi)
  {
  var keyNames = Object.keys(foi); 
var id = foi.id;
        var name = foi.name;
        var x= foi.x;
        var y= foi.y;
        var longeur = foi.width;
        var largeur = foi.height;
        var zoom = mapview.getZoomLevel();
       // alert(decision);
       // alert(id);
        nomreq=nom_req;
        $.ajax({
                 type: "POST",
                 url: "../controller/save.php",
                 data: {id:id,name:name, x:x, y:y, largeur:largeur, longeur:longeur,zoom:zoom,nomreq:nomreq},
                 success: function(msg) {
                    $('#autosavenotify').text('msg');
                 }
      });
        var htmlString ="";
        htmlString = "<UL style='background-color:white;'><LI> Nom : "+name+"</li><LI> Coordonnées : "+x+" , "+y+"</li><LI> Longeur : "+longeur+"</li><LI> largeur : "+largeur+"</li><LI> Niveau de zoom : "+zoom+"</li></UL>";

      mapview.displayInfoWindow(point, htmlString,400,100); 

  }
  /***************************************/
function addFOI()
  { 
    nomreq=nom_req;
    $.ajax({
                 type: "POST",
                 url: "../controller/recom.php",
                 data: {id:"go",requete:nomreq},
                 success: function(msg) {
                    $('#autosavenotify').text('msg');
                 }
      });

document.querySelector('.new-confirm').addEventListener('click', function() {
                new Attention.Confirm({
                    title: 'confirm',
                    content: 'Vous allez visualiser les zones explorées par d autres utilisateurs pour cette requête',
                    onCancel: function(component) {
                        
                    },
                    onConfirm: function(component) {
                          read_recommendation ();

                    }
                });
            });
   } 
/*******************************************/

function read_recommendation (){

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.open("GET","../controller/xy.txt",true);

	xmlhttp.onreadystatechange = function(){
	  if(xmlhttp.status == 200 && xmlhttp.readyState == 4){

	     txt = xmlhttp.responseText; 
	    ligne=txt.split("\n");
	    for(i=0;i<ligne.length;i++){
	     ligne_espace=ligne[i].split(" ");
	        
	     var x = parseFloat(ligne_espace[0]);
	     var y = parseFloat(ligne_espace[1]);
	     var mpoint3 = MVSdoGeometry.createPoint(x,y,8307);
	    
	    var num = i;
	    var n = num.toString();
	    var mfoi3 = MVFOI.createMarkerFOI(n,mpoint3,"./MARKER2.png");  
	    mapview.addFOI(mfoi3);
	  } 
	    
	  }  
	}
	xmlhttp.send(); 
   }


   function displayInfoWindow() 
  { 
    var mpoint = MVSdoGeometry.createPoint (3.090, 36.696,8307);
    var mpoint1 = mapview.transformGeom(mpoint, mapview.getSrid());
    mapview.displayInfoWindow(mpoint1, "x"); 
  }  
  
  
  function createToolBar(checkBox)
{
  
    if(checkBox.checked){

  // Create a tool bar that shows all builtin tool buttons.
  toolbar = new MVToolBar("toolbar1",[MVToolBar.BUILTIN_ALL]);
  toolbar.setPosition(0.45,0.05);
  mapview.addToolBar(toolbar);
  
  // Add event handlers to the builtin tools.
  var circleTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_CIRCLE) ;
  circleTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Circle tool is finished!");
  })
  var rectangleTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_RECTANGLE) ;
  rectangleTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Rectangle tool is finished!");
  })
  var redlineTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_REDLINE) ;
  redlineTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Redline tool is finished!");
  })
  var distanceTool = toolbar.getBuiltInTool(MVToolBar.BUILTIN_DISTANCE) ;
  distanceTool.attachEventListener(MVEvent.FINISH, 
  function(){//alert("Distance tool is finished!");
  })
  
  }

}
   function buildLegend(baseURL)
  {
    var theme=mapr.get(nom_req);
    switch(theme){
      
       case 'STAT_COMMUNE_DECES':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 4 </td>"+
               "                      <td>  4 - 8 </td>"+
               "                      <td> 8 - 11 </td>"+
               "                      <td> 11 - 15</td>"+
               "                      <td>  15 - 19 </td></tr>"+
               "</table>";
            break;
             case 'STAT_COMMUNE_BLESSES':     
       var html = 
             "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 7 </td>"+
               "                      <td> 7 - 13 </td>"+
               "                      <td>13 - 19 </td>"+
               "                      <td> 19 - 25 </td>"+
               "                      <td> 25 - 31 </td></tr>"+
               "</table>";
            break;
       case 'STAT_COMMUNE_DECES_COND':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2 </td>"+
               "                      <td>  2 - 4 </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td>6 - 8</td>"+
               "                      <td>  8 - 10 </td></tr>"+
               "</table>";
            break;
       case 'STAT_COMMUNE_NBACC':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 5 </td>"+
               "                      <td>  5 - 9 </td>"+
               "                      <td> 9 - 14 </td>"+
               "                      <td>14 - 18</td>"+
               "                      <td> 18 - 23 </td></tr>"+
               "</table>";
            break;
       case 'STAT_COMMUNE_NBACCM':     
       var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 3 </td>"+
               "                      <td>  3 - 6 </td>"+
               "                      <td> 6 - 8 </td>"+
               "                      <td> 8 - 11 </td>"+
               "                      <td> 11 - 14 </td></tr>"+
               "</table>";
            break;
       case 'STAT_COMMUNE_VICTIME':     
        var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=C.NEW_COLOR_STYLE&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_7&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_9&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_12&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RB13_13&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=C.RED2&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 10  </td>"+
               "                      <td>  10 - 20 </td>"+
               "                      <td>20 - 30 </td>"+
               "                      <td> 30 - 40 </td>"+
               "                      <td> 40 - 50 </td></tr>"+
               "</table>";
            break;
            case 'STAT_ROUTE_NACC':     
       var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td>1 - 5  </td>"+
               "                      <td> 5 - 10 </td>"+
               "                      <td>10 - 14  </td>"+
               "                      <td> 14 - 19</td>"+
               "                      <td> 19 - 24 </td></tr>"+
               "</table>";
            break;
             case 'STAT_ROUTE_NACCM_DSENS':     
       var html = 
              
                 "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td>1 - 4 </td>"+
               "                      <td> 4 - 7  </td>"+
               "                      <td>7 - 10 </td>"+
               "                      <td> 10 - 13 </td>"+
               "                      <td>  13 - 17 </td></tr>"+
               "</table>";
            break;
              case 'STAT_ROUTE_NACC_DSENS':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td>1 - 5  </td>"+
               "                      <td> 5 - 10 </td>"+
               "                      <td>10 - 14  </td>"+
               "                      <td> 14 - 19</td>"+
               "                      <td> 19 - 24 </td></tr>"+
               "</table>";
            break;
              case 'STAT_ROUTE_NACC_SSENS':     
       var html = 
              "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td>1 - 3  </td>"+
               "                      <td>3 - 6  </td>"+
               "                      <td>6 - 9 </td>"+
               "                      <td>9 - 12 </td>"+
               "                      <td>  12 - 15 </td></tr>"+
               "</table>";

            break;
              case 'STAT_ROUTE_NBACCM':     
       var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td>1 - 4 </td>"+
               "                      <td> 4 - 7  </td>"+
               "                      <td>7 - 10 </td>"+
               "                      <td> 10 - 13 </td>"+
               "                      <td>  13 - 17 </td></tr>"+
               "</table>";
            break;
              case 'STAT_ROUTE_NBACCM_SSENS':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

            case 'STAT_SECTION_ETAT':     
       var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.MAJOR STREET&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> - </td>"+
               "                      <td> OUI </td>"+
               "                      <td>NON</td></tr>"+
               "</table>";
            break;

            case 'STAT_SECTION_ETAT_CHAUSSE':     
       var html = 
                 "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.MAJOR STREET&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> - </td>"+
               "                      <td> Mauvais </td>"+
               "                      <td> Moyen </td>"+
               "                      <td>Bon</td></tr>"+
               "</table>";
            break;

            case 'STAT_SECTION_NBACC':     
       var html = 
               
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;
            case 'STAT_SECTION_NBACCM':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

            case 'STAT_SECTION_NBACCMSME':     
       var html = 
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

            case 'STAT_SECTION_NBACCSME':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

 case 'STAT_TRONCON_CONDBG':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_CONDBL':     
       var html = 
              
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_CONDD':     
       var html = 
     
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_NBACC':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_NBACCM':     
       var html = 
               "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 4  </td>"+
               "                      <td>4 - 6  </td>"+
               "                      <td> 6 - 8  </td>"+
               "                      <td>8 - 10 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PASSAGERBG':     
       var html = 
             
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PASSAGERBL':     
       var html = 
             
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PASSAGERD':     
       var html = 
             
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PEITONBG':     
       var html = 
         
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PIETONBL':     
       var html = 
     
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

             case 'STAT_TRONCON_PIETOND':     
       var html = 
      
                "<table border =1 style='border:1px solid white; border-radius:5px;background-color:#A6C7F0;'> <tr><td><img src="+baseURL+"/omserver?sty=L.DEFAULT&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREEN&w=45&h=20&ds=mvdemo></td>" + 
               "                 <td><img src="+baseURL+"/omserver?sty=L.GREENF&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.YELLOW&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.RED&w=45&h=20&ds=mvdemo></td>" +
               "                 <td><img src="+baseURL+"/omserver?sty=L.REDF&w=45&h=20&ds=mvdemo></td></tr>" +
               "                  <tr><td> 0 </td>"+
               "                      <td> 1 - 2</td>"+
               "                      <td>2 - 3</td>"+
               "                      <td> 3 - 4 </td>"+
               "                      <td>4 - 5</td>"+
               "                      <td> 5 - 6 </td></tr>"+
               "</table>";
            break;

    }
    return html;
  }
    function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var checkBoxMin = document.getElementById("myCheckMin");
 t = document.getElementById("tab");
  if (checkBox.checked == true){
 for(i=0;i<(tab2.length)-1;i++){
  if (tab2[i]==max) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="#ff1a40";
    
  }
   
}
}
else {
 for(i=0;i<(tab2.length)-1;i++){
  if (tab2[i]==max) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="transparent";
    
  }
   
}
}
    if (checkBoxMin.checked == true){
 for(i=0;i<(tab2.length)-1;i++){
  if (tab2[i]==min) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="#00cc44";
    
  }
   
}
}else {
 for(i=0;i<(tab2.length)-1;i++){
  if (tab2[i]==min) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="transparent";
    
  }
   
}
}

    

}
</script>
<body onload="cc()">

<section id="sect_resultatTB">
  <header>
    <p id="titre_reqTB"></p>

  </header>
  
 <div> <script src="dist/attention0.js"></script>
         <button onclick="fprint()" id="print">Imprimer</button>
         <div class="examples">
         <button class="button new-confirm" onclick="addFOI();" id="rec" style="visibility: hidden;">Recommendation</button>
       </div>
         <form >
          <br><br>
         <div class="selectBox radio" ID="div1" style="float: left;margin-right: 10px;">
            <input  type="checkbox" id="myCheck" onclick="myFunction()" name="choix" value="t">
            <label id="lab" for="myCheck" >
              Nombre Max    
            </label>  
          </div>
          <div class="selectBox radio" ID="div2">
            <input  type="checkbox" id="myCheckMin" onclick="myFunction()" name="choix" value="t">
            <label id="lab2" for="myCheckMin" >
              Nombre min   
            </label>  
          </div>
         </form>

     </div>
<div id="div_parent">
     <div class="child" id="areachart" style="background-color: white; border: 1px solid #ccc;box-shadow: 0px 0px 3px #ccc">
     

<input id="check" TYPE="checkbox" onclick="createToolBar(this)" style="visibility: hidden">
<label id="Labcheck" style="visibility: hidden;"></label>
     </div>

 <div class="child" id="tab" >
       
  </div>

</div>




</section>
</body>
</html>