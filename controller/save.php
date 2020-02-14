<?php 
include_once("../model/Model.php");
session_start();

 class save{
 	public $model;
public function __construct()
    {
        $this->model = new Model();
    }
	public function ecrire_fichier(){
		$txt="";
		$myfile = fopen("info.txt", "a") or die("Unable to open file!");
		if (isset($_POST['id'])) {
			     $id = $_POST['id'];
			     $nomreq = $_POST['nomreq'];
			     $name = $_POST['name'];
		         $x= $_POST['x'];
		         $y= $_POST['y'];
		         $largeur = $_POST['largeur'];
		         $longeur = $_POST['longeur'];
		         $zoom = $_POST['zoom'];
		    $txt = $txt.$nomreq.' / '.$id.' / '.$name.' / '.$x.' / '.$y.' / '.$longeur.' / '.$largeur.' / '.$zoom."\r\n";

// $insert = new save();
$this->insert_carte($nomreq);
$id_zoom=$zoom+1;
$this->insert_click($id,$id_zoom,$x,$y,$largeur,$longeur);


		fwrite($myfile, $txt);
		}
		fclose($myfile);
	}	


public function insert_carte($nom_requete)
	{
	$carte=$this->model->get_carte($nom_requete); 
	$cle = array_keys($carte);
	

	$nb=$this->model->get_nb_carte($cle[0]); 
	$profil=$_SESSION['id_profil'];
	if( $nb==0){
				$this->model->inserer_carte($cle[0],$carte[$cle[0]],$profil);
				}
				$id_exp=$this->model->insert_exploration($cle[0]);
			$_SESSION['id_exploration']=$id_exp;
	}


	public function insert_click($id_click,$id_zoom,$x,$y,$long,$larg)
	{
		$id_click=$this->model->inserer_click($id_click,$id_zoom,$x,$y,$long,$larg);
		$id_exp=$_SESSION['id_exploration'];
		$this->model->insert_exploration_click($id_exp,$id_click);
		$this->model->insert_exploration_zoom($id_exp,$id_zoom);
	}
}

$instance = new save();
$instance->ecrire_fichier();	
?>