
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aide</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

      <link rel="stylesheet" href="./dist/style1.css">
	<style type="text/css">
.aide > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #009fee;
}

 #cssmenu > ul > .aide > a{
  color: #ffffff;
}
</style>
</head>
<body class="is-boxed has-animations">
	  <?php include 'menu.php' ?>
    <div class="body-wrap boxed-container"  style="margin-top: 10px">
      
  <div class="wrapper">
  <input checked type=radio name="slider" id="slide1" />
  <input type=radio name="slider" id="slide2" />
  <input type=radio name="slider" id="slide3" />
  <input type=radio name="slider" id="slide4" />
  <input type=radio name="slider" id="slide5" />

  <div class="slider-wrapper">
    <div class=inner>
      <article>
        
        <img src="img/choix.PNG" />
        <div>
          <p> (1) Pour faire une analyse non spatial.
       <br>   (2) Pour faire une analyse spatial.
     </p><br></div>
      </article>

      <article>
        
        <img src="img/olap.PNG" />
        <div>
          <p>(1) Pour choisir la mesure d'analyse.
       <br>(2) Pour saisir une requete.
     <br>(3) Pour choisir la possiblité d'analyse.
     <br>(5) Recommandation de requetes.
 <br>(4) Pour choisir la possibilité d'analyse d'une requete recommandée.

</p><br></div>
      </article>

      <article>
        
        <img src="img/resultatOlap.PNG" />
        <div ><p>(1) Pour afficher les valeurs max et min du tableau.
       <br>(2) Pour imprimer la page.
     </p><br></div>
      </article>

      <article>
        
        <img src="img/Solap.PNG" />
          <div>
          <p>(1) Pour choisir la mesure d'analyse.
       <br>(2) Pour choisir une requete.
     <br>(3) Pour choisir la possiblité d'analyse.
     <br>(5) Pour choisir la possibilité d'analyse d'une requete recommandée.
 <br>(4) La possibilité d'analyse d'une requete de recommendation.

</p><br></div>
      </article>

      <article>
        
        <img src="img/resultatSolap.PNG" />
        <div ><p>(1) Pour afficher la où les utilisateurs d'un même profil ont cliqué pour la meme requete, le resultat est visualisé sous forme de points.
       <br>(2) Afficher les informations relatives a une zone.
     </p><br></div>
      </article>
    </div>
  </div>

  <div class="slider-prev-next-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-prev-next-control -->

  <div class="slider-dot-control">
    <label for=slide1></label>
    <label for=slide2></label>
    <label for=slide3></label>
    <label for=slide4></label>
    <label for=slide5></label>
  </div>
  <!-- .slider-dot-control -->
</div>
  
  

    <script  src="./dist/script.js"></script>



    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
