<!DOCTYPE html>
<html>
<head>
  <title>Tableau de bord </title>
  <link rel="stylesheet" href="../css/styleTB11.css">
<script type="text/javascript" src="../js/js_f2.js"></script>
<style type="text/css">
  .tb > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #009fee;
}

 #cssmenu > ul > .tb > a{
  color: #ffffff;
}
</style>
</head>
<script type="text/javascript">

</script>
<body style="background-color:  rgb(242, 243, 245);">
  <?php include 'menu.php' ?>
<?php
session_start();
include_once("../model/Model.php");
    $id_prof=$_SESSION['id_profil'];
if(!empty($_POST['sub_req'])){

/*inserer la requete recommendé*/

    $nom_req=$_POST['titre_requete'];
    $model= new Model();
    $model->inserer_requete($nom_req,$id_prof);
  $model->inseret_MC($id_prof,$nom_req);
if($_POST['test']=="2"){
include 'tb2.php';
}else {
include 'tb3.php';
}
}
else {
if(!empty($_POST['myBtn'])){
/*inserer la requete saisi*/

    $nom_req=$_POST['myInput'];
    $model= new Model();
    $model->inserer_requete($nom_req,$id_prof);
     $model->inseret_MC($id_prof,$nom_req);
    if($_POST['test2']=="2"){
include 'tb2_2.php';
}else {
include 'tb3_3.php';
}
}
}



if (!empty($_POST['myBtn2'])) {
   
    $nom_req=$_POST['myInput'];
    $model= new Model();
    $model->inserer_requete($nom_req,$id_prof);
  $model->inseret_MC($id_prof,$nom_req);

   
include 'tb2_2.php';
}else {
  if (!empty($_POST['sub_req2'])) {

    $nom_req=$_POST['titre_requete'];
    $model= new Model();
    $model->inserer_requete($nom_req,$id_prof);
      $model->inseret_MC($id_prof,$nom_req);


    include 'tb2.php';
  }
}




?>

</body>
</html>