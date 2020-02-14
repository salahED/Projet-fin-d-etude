<?php

class Model {
  function get_connex1(){

        $conn=oci_connect("admin","oracle12C","localhost/orcl");
    If (!$conn)
       echo 'Failed to connect to Oracle';

    return $conn; 
  }

  
   function get_connex2(){

        $conn=oci_connect("admin","oracle12C","localhost/orcl");
    If (!$conn)
       echo 'Failed to connect to Oracle';
    return $conn; 
  }

  function get_nb_requete($id){ 
 
/********************************************************/
$con = $this->get_connex1();
$query3 = "SELECT count(*) from requete where id_profil='$id'"; 

$stid3 = oci_parse($con, $query3); 


$rs3=oci_execute($stid3);

$nb= oci_fetch_array($stid3, OCI_BOTH);

  return $nb[0]; 

 }
    function get_nb_requete2($id){ 
 
/********************************************************/
$con = $this->get_connex1();
$query3 = "SELECT nb from nbreq where id_profil='$id'"; 

$stid3 = oci_parse($con, $query3); 


$rs3=oci_execute($stid3);

$nb= oci_fetch_array($stid3, OCI_BOTH);

  return $nb[0]; 

 }
  


   function update_nb_requete2($id,$nvx){ 
 
/********************************************************/
$con = $this->get_connex1();
$query3 = "update nbreq set nb=$nvx where id_profil='$id'"; 

$stid3 = oci_parse($con, $query3); 


$rs3=oci_execute($stid3);


 }

 function get_userProfil($nom,$pwd){ // get id_profil 
 
$con = $this->get_connex1();
$query = "SELECT id_profil from utilisateur where nom_utilisateur='$nom' and mot_de_passe='$pwd'"; 
$stid = oci_parse($con, $query); 
$rs=oci_execute($stid);

if ($rs)
{
	while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) 
{
 $id=$row[0];

return $id;
}

  }
 }
 function get_requete_simple(){
	$res=array();
$con = $this->get_connex1();

$query2 = "SELECT requete from t_requete";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$req=$row2[0];

array_push($res,$req);
	
}
	return $res; 
}
function get_requete_spatial(){
	$req;
$con = $this->get_connex1();

$query2 = "SELECT id_carte,NOM_REQUETE from t_carte";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$req[$row2[0]]=$row2[1];

	
}
	return $req; 
}


function get_theme_spatial($req){
  $req;
$con = $this->get_connex1();

$query2 = "SELECT nom_theme from t_carte where nom_requete=:nom";

$stid2 = oci_parse($con, $query2); 

$nom=$req;
oci_bind_by_name($stid2, ':nom', $nom);
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$reqq=$row2[0];

}
  return $reqq; 
}


function get_pa_spatial($req){
  $req;
$con = $this->get_connex1();

$query2 = "SELECT pa from t_carte where nom_requete=:nom";

$stid2 = oci_parse($con, $query2); 

$nom=$req;
oci_bind_by_name($stid2, ':nom', $nom);
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$reqq=$row2[0];

}
  return $reqq; 
}




function get_pa_requete_simple($nom_req){

$con = $this->get_connex1();
$query3 = "SELECT pa from t_requete where requete=:nom"; 

$stid3 = oci_parse($con, $query3); 

$nom=$nom_req;
oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];
  return $req; 
}
  

}
  


 function get_nb($nom_req){ 
 

$con = $this->get_connex1();
$query3 = "SELECT nb from t_requete where requete=:nom"; 

$stid3 = oci_parse($con, $query3); 

$nom=$nom_req;
oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

while (($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{

$req=$row3[0];
  return $req; 
}
  
 }



 function inserer_requete($nom_req,$id_profil){ 
 //inserer les requetes et leurs mots cles

$con = $this->get_connex1();
$req;
$query2 = "SELECT count(*) from requete where texte=:nom and ID_PROFIL='$id_profil'"; 

$stid2 = oci_parse($con, $query2); 

$nomm=$nom_req;
oci_bind_by_name($stid2, ':nom', $nomm);
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$requ=$row2[0];
}


if($requ==0){

$query3 = "SELECT id_requete from t_requete where requete=:nom"; 
$stid3 = oci_parse($con, $query3); 

$nom=$nom_req;
oci_bind_by_name($stid3, ':nom', $nom);
$rs3=oci_execute($stid3);

$row3 = oci_fetch_array($stid3, OCI_BOTH);


$req=$row3[0];


$query4 = "insert into requete values (:nom1,:nom2,:nom3)"; 


$stid4 = oci_parse($con, $query4); 
oci_bind_by_name($stid4, ':nom1', $req);
oci_bind_by_name($stid4, ':nom2', $nom_req);
oci_bind_by_name($stid4, ':nom3', $id_profil);

$rs4=oci_execute($stid4);


}


 }

 function inseret_MC($id_profil,$Nomreq){
  $con = $this->get_connex1();
$query2 = "SELECT id_requete from requete where texte=:nom"; 

$stid2 = oci_parse($con, $query2); 

oci_bind_by_name($stid2, ':nom', $Nomreq);
$rs2=oci_execute($stid2);

$row2 = oci_fetch_array($stid2, OCI_BOTH);


$requ=$row2[0];



  $query5 = "SELECT mot_cle,id_mot from t_motcle where nature !='mesure' and id_requete=:nom"; 
$stid5 = oci_parse($con, $query5); 


oci_bind_by_name($stid5, ':nom', $requ);
$rs5=oci_execute($stid5);
$mot="";
$id="";


while (($row5 = oci_fetch_array($stid5, OCI_BOTH)) != false) 
{

$mot=$mot.$row5[0].",";
$id=$id.$row5[1].",";
}



$tab=explode(",", $mot);
$cpt=sizeof($tab);
$tab2=explode(",", $id);

for($i=0;$i<$cpt-1;$i++){
  $idd=(int)$tab2[$i];



$query22 = "SELECT count(*) from mot_cle where id_profil= '$id_profil' and id_mot='$idd' and id_requete='$requ'"; 

$stid22 = oci_parse($con, $query22); 


$rs22=oci_execute($stid22);

$row22 = oci_fetch_array($stid22, OCI_BOTH);


$nb22=$row22[0];

if($nb22==0){



 

 $query6 = "insert into mot_cle values ('$id_profil','$idd','$requ','$tab[$i]')"; 

$stid6 = oci_parse($con, $query6); 

$rs6=oci_execute($stid6);
}
}
 }
/********************************************************************************************************************/

 function get_mc_poid_profil($id){
$con = $this->get_connex1();

$query2 ="SELECT distinct m.id_mot, p.poid from mot_cle m , requete r, poid p where 
m.id_requete=r.id_requete and r.id_profil=p.id_profil and m.id_mot=p.id_mot and p.id_profil='$id'";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);
$mc_profil=[];
while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$mc_profil[$row2[0]]=$row2[1];
  
}
  return $mc_profil; 
}
  

 function get_mc_poid_domaine($id){
$con = $this->get_connex1();

$query2 = "SELECT distinct m.id_mot, p.poid from t_motcle m , t_requete r, t_poid p where 
m.id_requete=r.id_requete and r.id_domaine=p.id_domaine and m.id_mot=p.id_mot and p.id_domaine='$id'";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);
$mc_domaine=[];
while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$mc_domaine[$row2[0]]=$row2[1];
  
}
  return $mc_domaine; 
}


 function inserer_poid($id){

$con = $this->get_connex1();

$query1 = "delete from poid where id_profil='$id'";

$stid1 = oci_parse($con, $query1); 
$rs1=oci_execute($stid1);

$query2 = "select count(*) from requete where id_profil='$id'";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);
$nb_req= oci_fetch_array($stid2, OCI_BOTH);
                                                  $nb_requete=$nb_req[0];
$query3 = "select m.id_mot from mot_cle m, requete r where r.id_requete=m.id_requete and r.id_profil='$id'";
$stid3 = oci_parse($con, $query3); 
$rs3=oci_execute($stid3);

$mc=[];
$cpt=0;
while (($row2 = oci_fetch_array($stid3, OCI_BOTH)) != false) 
{
$mc[$cpt]=$row2[0];
$cpt=$cpt+1;

}


$mc_unique = array_unique ($mc);
$index=array_keys($mc_unique);
$nb=sizeof($index);


for ($i=0; $i <$nb ; $i++) { 
  $nbr = array();
$nbr = count(array_keys($mc,$mc_unique[$index[$i]]));
$poid=(float)$nbr/(float)$nb_requete; 

$idM=$mc_unique[$index[$i]];
//$poidd=str_replace(".", ",", $poid);
//print_r($poid);
$query4 = "insert into poid values ('$id','$idM','$poid')";

$stid4 = oci_parse($con, $query4); 
$rs4=oci_execute($stid4);

}



}

function get_nomVM($id_dom){
//  $req;
$con = $this->get_connex1();

$query2 = "SELECT nom_vm from t_domaine where id_domaine='$id_dom'";

$stid2 = oci_parse($con, $query2); 


$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$reqq=$row2[0];

}
 
$liste_vm_refresh=explode(",",$reqq);
$con2 = $this->get_connex2();
for ($i=0; $i <sizeof($liste_vm_refresh) ; $i++) { 
$nomVM=$liste_vm_refresh[$i];
$query3 = "begin dbms_mview.refresh('$nomVM'); end;";

$stid3 = oci_parse($con2, $query3); 

$rs=oci_execute($stid3);
}

}


function refresh_VM_Commune(){

$con = $this->get_connex1();


$nomVM='vm_COMM';
$query3 = "begin dbms_mview.refresh('$nomVM'); end;";

$stid3 = oci_parse($con2, $query3); 

$rs=oci_execute($stid3);


}

function alterer_session(){
  $con2 = $this->get_connex2();
  $query = "alter session set query_rewrite_enabled=force";
$stid3 = oci_parse($con2, $query); 
$rs=oci_execute($stid3);
}

function inserer_domaine($id_dom,$id_profil){
    $con = $this->get_connex1();
$query="select desc_domaine from t_domaine where id_domaine='$id_dom'";
$stid = oci_parse($con, $query); 
$rs=oci_execute($stid);

while (($row2 = oci_fetch_array($stid, OCI_BOTH)) != false) 
{

$reqq=$row2[0];

}

$query99="select count(*) from domaine_interet where domaine_interet.id_domaine='$id_dom' and domaine_interet.id_profil='$id_profil'";
$stid99 = oci_parse($con, $query99); 
$rs99=oci_execute($stid99);
$row99 = oci_fetch_array($stid99, OCI_BOTH);
$nb99=$row99[0];
if ($nb99==0) {
$query2="insert into domaine_interet values ('$id_dom','$reqq','$id_profil')";

$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);
}

}

function get_carte($nom_req){

  $carte=[];
   $con = $this->get_connex1();
$query="select t.id_carte,t.id_requete from t_carte t where t.nom_requete=:nom";
$stid = oci_parse($con, $query); 
oci_bind_by_name($stid, ':nom', $nom_req);
$rs=oci_execute($stid);


while (($row2 = oci_fetch_array($stid, OCI_BOTH)) != false) 
{

$carte[$row2[0]]=$row2[1];
}
return $carte;
}
function inserer_carte($id_carte,$id_requete,$id_profil){
    $con = $this->get_connex1();
    $query2="insert into carte values ('$id_carte','$id_requete','$id_profil')";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);

}
function get_nb_carte($id){
    $con = $this->get_connex1();
    $query2="select count(*) from carte where id_carte='$id'";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);
   $nb = oci_fetch_array($stid2, OCI_BOTH);
   return $nb[0];
}
function insert_exploration($id_carte){
   $con = $this->get_connex1();
$query="select count(*) from EXPLORATION_CARTE";
    $stid = oci_parse($con, $query); 
    $rs=oci_execute($stid);
    $nb = oci_fetch_array($stid, OCI_BOTH);
    $id_exp=$nb[0]+1;
    $query2="insert into EXPLORATION_CARTE values ('$id_exp','$id_carte')";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);
    return $id_exp;
}


function inserer_click($id_click,$id_zoom,$x,$y,$long,$larg){
    $con = $this->get_connex1();
    $query="select count(*) from click";
    $stid = oci_parse($con, $query); 
    $rs=oci_execute($stid);
    $nb = oci_fetch_array($stid, OCI_BOTH);
    $id_click=$nb[0]+1;
    $query2="insert into click values ('$id_click','$id_zoom','$x','$y','$long','$larg')";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);
    return $id_click;
}

function insert_exploration_click($id_exp,$id_click){
    $con = $this->get_connex1();
    $query2="insert into EXPLO_CLICK values ('$id_exp','$id_click')";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);
}

function insert_exploration_zoom($id_exp,$id_zoom){
    $con = $this->get_connex1();
    $query2="insert into EXPLO_ZOOM values ('$id_exp','$id_zoom')";
    $stid2 = oci_parse($con, $query2); 
    $rs2=oci_execute($stid2);
}
function get_xy($profil,$req){
$xy=[];
$con = $this->get_connex1();


$query="select r.ID_REQUETE from requete r where texte=:reque and r.ID_PROFIL='$profil'";
$stid = oci_parse($con, $query); 
oci_bind_by_name($stid, ':reque', $req);
$rs=oci_execute($stid);
$row = oci_fetch_array($stid, OCI_BOTH);

$query2="select c.x,c.y from click c,EXPLO_CLICK expc, EXPLORATION_CARTE exp,carte ca where c.id_click=expc.id_click and expc.ID_EXPLORATION=exp.ID_EXPLORATION and exp.ID_CARTE=ca.ID_CARTE and ca.ID_REQUETE ='$row[0]' and ca.ID_PROFIL='$profil'";
$stid2 = oci_parse($con, $query2); 
$rs2=oci_execute($stid2);

while (($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false) 
{

$xy[$row2[0]]=$row2[1];
}
return $xy;
}


}

?>