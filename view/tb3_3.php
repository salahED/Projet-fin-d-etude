<!DOCTYPE html>
<html>
<head>
  <title>Tableau de bord </title>
  <link rel="stylesheet" href="../css/styleTB11.css">
<script type="text/javascript" src="../js/js_f2.js"></script>
    <script type="text/javascript" src="../js/loder.js"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="../css/style_radio.css">
</head>

<style type="text/css">

   #tab  {

  border-collapse: collapse;
  width :100%; !important
  height: 20%; !important
  margin-left: 0%; !important
  margin-top: 0%; !important
}


</style>
<script type="text/javascript">

function fprint() {
  window.print();
}
 
  function cc() {
document.getElementById("sect_resultatTB").style.visibility="visible";
<?php
$pa_choix=$_POST['choix_paa'];
?>
nom_pa="<?php echo $pa_choix ?>";
if(nom_pa=="Tableaue"){
    document.getElementById('myCheck').style.visibility="visible";
    document.getElementById('lab').style.visibility="visible";
  <?php

$nom=$_POST['myInput'];

$conn=oci_connect("admin","oracle12C","localhost/orcl");
 
$query3 = "SELECT sql_text from t_requete where requete=:nom"; 

$stid3 = oci_parse($conn, $query3); 

oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);
?>
nom_req="<?php echo $nom ?>";
//alert(nom_req);

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
    $column_name3  = oci_field_name($stid, 3);

$un="";$deux="";$trois="";
     while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {
          
$un=$un.$row[0].","; $un=str_replace(array("\n", "\r"), '', $un);
          $deux=$deux.$row[1].",";$deux=str_replace(array("\n", "\r"), '', $deux);
 $trois=$trois.$row[2].",";$trois=str_replace(array("\n", "\r"), '', $trois);

                    }

?>
temps="<?php echo $temps_execution ?>";
//alert('temps = '+temps*1000+' milliseconde');
un="<?php echo nl2br($un) ?>";deux="<?php echo nl2br($deux) ?>";trois="<?php echo nl2br($trois) ?>";
c1="<?php echo $column_name ?>";c2="<?php echo $column_name2 ?>";c3="<?php echo $column_name3 ?>";
tab1=un.split(',');tab2=deux.split(',');tab3=trois.split(',');

tab3_max=trois.split(',').map(function(item) {
    return parseInt(item, 10);
});
element = tab3_max.pop();
max=Math.max.apply(null,tab3_max);


tab3_min=trois.split(',').map(function(item) {
    return parseInt(item, 10);
});
element3 = tab3_min.pop();
min=Math.min.apply(null,tab3_min);
str="<table id='tab'> <tr><th>"+c1+"</th><th>"+c2+"</th><th>"+c3+"</th></tr>";
for(i=0;i<(tab3.length)-1;i++){
str=str+"<tr>";
str=str+"<td>"+tab1[i]+"</td>";
str=str+"<td>"+tab2[i]+"</td>";
str=str+"<td>"+tab3[i]+"</td>";

str=str+"</tr>";

}
str=str+"</table>";

document.getElementById('areachart').innerHTML=str;

}
 
    }
  
 
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var checkBoxMin = document.getElementById("myCheckMin");
 t = document.getElementById("tab");
  if (checkBox.checked == true){
 for(i=0;i<(tab3.length)-1;i++){
  if (tab3[i]==max) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="#ff1a40";
    
  }
   
}
}
else {
 for(i=0;i<(tab3.length)-1;i++){
  if (tab3[i]==max) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="transparent";
    
  }
   
}
}
    if (checkBoxMin.checked == true){
 for(i=0;i<(tab3.length)-1;i++){
  if (tab3[i]==min) {

    d = t.getElementsByTagName("tr")[i+1].style.backgroundColor="#00cc44";
    
  }
   
}
}else {
 for(i=0;i<(tab3.length)-1;i++){
  if (tab3[i]==min) {

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
 <div>
         <button onclick="fprint()" id="print">Imprimer</button>
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
     <div id="areachart" style="background-color: white; border: 1px solid #ccc;box-shadow: 0px 0px 3px #ccc"></div>
</section>
</body>
</html>