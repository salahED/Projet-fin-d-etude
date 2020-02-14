<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8"/>
<title>Interface d'analyse </title>
<link rel="stylesheet" href="../css/styleAnalyse2.css">
<link rel="stylesheet" href="../css/styleRecommandation5.css">
<script type="text/javascript" src="../js/jsSpatial1.js"></script>

    <script type="text/javascript" src="../js/loder.js"></script>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../css/style_radio.css">
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
<script type="text/javascript">




	function click_radio(formradio){


if(formradio.choix[0].checked){

	autocomplete(document.getElementById("myInput"), tab4);
}
if(formradio.choix[1].checked){

	autocomplete(document.getElementById("myInput"), tab0);}

if(formradio.choix[2].checked){

	autocomplete(document.getElementById("myInput"), tab2);}
	

  if(formradio.choix[3].checked){

  autocomplete(document.getElementById("myInput"), tab3);}
	}





</script>
</head>
<body style="background-color: #F2F3F5;">

<?php include 'menu.php' ?>


<div class="container">
<section id="sect">

<p>Selectionnez un axe d'analyse : </p>
<form autocomplete="off" action="tableau_bord.php" name="formradio" method="post" target="_blank">

  <div class="autocomplete">


<div class="selectBoxGroup">
<div class="selectBox radio" ID="div4">
    <input type="radio" name="choix" id="radio-4" value="c">
    <label for="radio-4" >
      Communes 
    </label>  
  </div>

  <div class="selectBox radio" ID="div1">
    <input type="radio" name="choix" id="radio-1" value="r">
    <label for="radio-1" >
      Routes 
    </label>  
  </div>

  <div class="selectBox radio" ID="div2">
    <input type="radio" name="choix" id="radio-2" value="t">
    <label for="radio-2" >
      Troncons     
    </label>  
  </div>

  <div class="selectBox radio" ID="div3">
    <input type="radio" name="choix" id="radio-3" value="s">
    <label for="radio-3" >
      Sections 
    </label>  
  </div>

  
</div>

<p>
Saisissez une requete : 
<input  name="myInput" id="myInput" type="text" placeholder="Requete" onfocus="click_radio(formradio)" >
</p>
  <p class="demo">Vous pouvez commencer ainsi "le nombre ..."</p>
  
  <div class="selectBoxGroup">

  <div class="selectBox radio" ID="div1">
    <input type="radio" name="choix_paa" id="Tableaue" value="Tableaue" disabled>
    <label for="Tableaue" >
      Tableau 
    </label>  
  </div>

  <div class="selectBox radio" ID="div2">
    <input type="radio" name="choix_paa" id="Camemberte" value="Camemberte" disabled>
    <label for="Camemberte" >
      Camembert     
    </label>  
  </div>

  <div class="selectBox radio" ID="div3">
    <input type="radio" name="choix_paa" id="Barree" value="Barree" disabled>
    <label for="Barree" >
      Barre 
    </label>  
  </div>

  <div class="selectBox radio" ID="div4">
    <input type="radio" name="choix_paa" id="Nuagee" value="Nuagee" disabled>
    <label for="Nuagee" >
      Nuage
    </label>  
  </div>

  <div class="selectBox radio" ID="div5">
    <input type="radio" name="choix_paa" id="Cartee" value="Cartee" disabled>
    <label for="Cartee" >
      Carte
    </label>  
  </div>

</div>
  <input type="submit" name="myBtn2" id="myBtn" value="Visualiser">

</form>
<input type="text" name="test2" id="test2" style="visibility: hidden" value="2">
  </div>

</section>

<section id="sect_resultat">
  <form action="tableau_bord.php" method="post" target="_blank">
    
<input type="text" name="titre_requete" id="titre_req"  >
<input type="text" name="test" id="test" style="visibility: hidden" value="2">
<br>

 <div class="selectBoxGroup">

  <div class="selectBox radio" ID="div1">
    <input type="radio" name="choix_pa" id="Tableau" value="Tableau" disabled>
    <label for="Tableau" >
      Tableau 
    </label>  
  </div>

  <div class="selectBox radio" ID="div2">
    <input type="radio" name="choix_pa" id="Camembert" value="Camembert" disabled>
    <label for="Camembert" >
      Camembert     
    </label>  
  </div>

  <div class="selectBox radio" ID="div3">
    <input type="radio" name="choix_pa" id="Barre" value="Barre" disabled>
    <label for="Barre" >
      Barre 
    </label>  
  </div>

  <div class="selectBox radio" ID="div4">
    <input type="radio" name="choix_pa" id="Nuage" value="Nuage" disabled>
    <label for="Nuage" >
      Nuage
    </label>  
  </div>

  <div class="selectBox radio" ID="div5">
    <input type="radio" name="choix_pa" id="Carte" value="Carte" disabled>
    <label for="Carte" >
      Carte
    </label>  
  </div>
  
</div>
<div><input type="submit" name="sub_req2" value="Visualiser" id="sub_req" ></div>

  </form>


</section>


</div>


<aside>
	
	<header>
<details>
  <summary style="padding-top: 5px;" onclick="rand_req()">Recommandation de requetes</summary>


<div id="text_req">

<details style="margin-left: 10px;margin-top: 20px;">
  <summary style="padding-top: 5px;">Requete 1.</summary>
  <a class="req_a" href="#" id="req1" onclick="visualisation1()"></a>
</details>
<details style="margin-left: 10px;">
  <summary style="padding-top: 5px;">Requete 2.</summary>
  <a class="req_a" href="#" id="req2" onclick="visualisation2()"></a>
</details>
<details style="margin-left: 10px;">
  <summary style="padding-top: 5px;">Requete 3.</summary>
  <a class="req_a" href="#" id="req3" onclick="visualisation3();"></a>
</details>
<details style="margin-left: 10px;">
  <summary style="padding-top: 5px;">Requete 4.</summary>
    <a class="req_a" href="#" id="req4" onclick="visualisation4();"></a>
</details>
<details style="margin-left: 10px;">
  <summary style="padding-top: 5px;">Requete 5.</summary>
    <a class="req_a" href="#" id="req5" onclick="visualisation5();"></a>
</details>
</details></header>



</aside>


</body>

</html>
  <?php
  
include_once("../controller/spatial_controller.php");
$controller = new analyse_controller();
$controller->get_random_requete_spatial();
?>