<?php 
include_once("../model/Model.php");
session_start();

 class save_xy{
 	public $model;
public function __construct()
    {
        $this->model = new Model();
    }
    function getXY(){
		if (isset($_POST['id'])) {
			$requete = $_POST['requete'];
			unlink('xy.txt');
			$myfile = fopen("xy.txt", "a") or die("Unable to open file!");
			$id_profil=$_SESSION['id_profil'];
			$xy=$this->model->get_xy($id_profil,$requete);
		//	fwrite($myfile, $xy);
			$cle = array_keys($xy);


			for ($i=0; $i <sizeof($cle) ; $i++) { 
				
				$txt=$cle[$i]." ".$xy[$cle[$i]]."\r\n";
				fwrite($myfile, $txt);
			}
			fclose($myfile);
			     }
    }
}
$instance = new save_xy();
$instance->getXY();	
?>