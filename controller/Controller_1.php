<?php	

class Controller_1 {


function get_choix(){
if(!empty($_POST)){
if($_POST['id']=="olap"){
include '';
  header('Location: analyseOlap.php');  

}
else {
  header('Location: analyseSpatial.php');  

}

}

}

}
?>