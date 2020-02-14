<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../css/style_header7.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Interface Principale</title>
</head>
<body>

<div id='cssmenu'>
  <ul>
   <li class='accueil'><a href='accueil.php'>Accueil</a></li>
   <li class='analyse'><a  id='analyse' href='analyse.php'>Analyse</a></li>
   <li class="tb" ><a id='tb' href='tableau_bord.php'>Tableau de bord</a></li>
   <li class="contact"><a  id='contact' href='Contact.php'>Contact</a></li>
   <li class="aide"><a  id='help' href='help.php'>Aide</a></li>
   <li class="dec" style="float: right;margin-right: 0.3%;"><a id='deconnect' href='../index.php' >Deconnexion</a></li>  
   <li class="dec" style="float: right;"><p style="z-index: 0">
   	<?php
   		$file=fopen("../svg.txt","r");
   		$char[0] = "";
   		$i=0;
   		$char[$i]=fgetc($file);
   		while($char[$i]!='#')
			{$i=$i+1;
			$char[$i]=fgetc($file);
			}

			$arrlength = count($char);
echo "{ Bienvenu ";
for($x = 0; $x < $arrlength-1; $x++) {
    echo $char[$x];
}
echo " }";
		fclose($file);
		/*session_start();
		include_once("../model/Model.php");
		$nom=$_SESSION['nom'];
		echo $nom;*/
    ?>
    	
    </p></li>
</ul>
</div>

</body>
<html>
