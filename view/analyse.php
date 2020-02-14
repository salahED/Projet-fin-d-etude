<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8"/>
<title>Interface d'analyse </title>


<link rel="stylesheet" href="../css/styleF1.css">
 <link rel="stylesheet" href="../css/style_button2.css">
<style type="text/css">
.analyse > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #009fee;
}

 #cssmenu > ul > .analyse > a{
  color: #ffffff;
}
</style>
</head>
<body>
  <?php include 'menu.php' ?>

  <div class="col">
  <div class="container-6">
    <div class="btn btn-six">
       <span>    <a class="lien" href="./analyseOlap.php"><img style="border-radius: 10px 10px 1px 1px;" src=".\img\olap2.png">Analyse non spatiale</a> </span>

    </div>

     <div class="btn btn-six">
 <span> <a class="lien" href="./analyseSpatial.php"><img style="border-radius: 10px 10px 1px 1px;" src=".\img\solap2.png">Analyse spatiale</a></span>
    </div>
    
  </div>
</div>
</body>

</html>
<?php 
include_once("../controller/Controller_1.php");
$controller = new Controller_1();
$controller->get_choix();
 ?>

