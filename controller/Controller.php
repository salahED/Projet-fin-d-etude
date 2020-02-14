<?php	
require_once __DIR__ . '../../vendor/autoload.php';
use Phpml\Math\Distance\Manhattan;
use Phpml\Math\Distance\Euclidean;
use Phpml\Math\Distance\Minkowski;

include_once("model/Model.php");

session_start();
class Controller {
public $nb_apprentissage=10;
public $nb_domaine=6;
public $model;
public function __construct()
    {
        $this->model = new Model();
    }
	
public function verifier_login()
{
	
		 
$nom=$_POST['username'];
$pwd=$_POST['pass'];

$name2=$this->model->get_userProfil($nom,$pwd); 

if($name2!=null){

	
$_SESSION['id_profil']=$name2;
$_SESSION['nom']=$nom;
$this->fichier($nom,$pwd,$name2);
$this->model->alterer_session();
 
header('Location: view/accueil.php');
$execution_debut = microtime(true);



$id=$_SESSION['id_profil'];
$nvx = $this->model->get_nb_requete($id); 
$ancien = $this->model->get_nb_requete2($id); 
echo "nvx    ".$nvx;
if ($nvx >= $ancien+20) {
echo "ancien  ".$ancien;
$this->apprentissage_methode2();
$this->model->update_nb_requete2($id,$nvx); 

}

$temps_execution = microtime(true) - $execution_debut;
echo "temps = ".$temps_execution;

}else{
echo '<script type="text/javascript">
window.alert("Erreur");
</script>'; 
}
	
}

function fichier($nom,$pass,$id){
	
$fp = fopen('svg.txt', 'w');
fwrite($fp, $nom.'#'.$pass.'#'.$id);
fclose($fp);
	
}



function existe($val,$tab){
for ($i=0; $i <sizeof($tab) ; $i++) { 
	if ($tab[$i]==$val) {
		return true;
	}
}

}
	function extraire_mc($tab){

		$tab1=[]; $cpt1=0;


$indice=array_keys($tab);
$max=sizeof($indice);

for ($i=0; $i <$max ; $i++) { 
	$tab1[$cpt1]=$indice[$i];

$cpt1=$cpt1+1;
}
return $tab1;

	}
/**************************************methode 2 ***********************/


public function apprentissage_methode2()
{
	$id=$_SESSION['id_profil'];
		/*Lancer l'apprentissage*/
$this->model->inserer_poid($id); //calculer le poid des mot cle du profil
$this->similarite($id);

}

public function similarite($id){
$mc_profil=$this->model->get_mc_poid_profil($id); 
$seuil=0.2;
$tab_domaine=[];
$total=0;
$tab1=$this->extraire_mc($mc_profil);	

$tab2=[];
$mc_domaine=[];
for ($i=1; $i <=$this->nb_domaine ; $i++) { 
	$mc_domaine=$this->model->get_mc_poid_domaine($i); 
	$tab2[$i]=$this->extraire_mc($mc_domaine);

}

for ($i=1; $i <=$this->nb_domaine ; $i++) { 
	$tab2_2=$tab2[$i];$cpt=0;
for ($j=0; $j <sizeof($tab1) ; $j++) { 

if ($this->existe($tab1[$j], $tab2_2)==true) {

$mc_domaine=$this->model->get_mc_poid_domaine($i); 
	
$poid1=str_replace(",", ".", $mc_domaine[$tab1[$j]]);
$poid2=str_replace(",", ".", $mc_profil[$tab1[$j]]);
$a=[$poid1];$b=[$poid2];
	$manhattan = new Manhattan();
$sim=$manhattan->distance($a, $b);

if($sim<=$seuil){

	$cpt=$cpt+1; $total=$total+1;
}
}

	}
$tab_domaine[$i]=$cpt;
}
//print_r($tab_domaine);

$tab_retenir=[];

$max=max($tab_domaine);

$seuil=(float)$max*3/(float)4;
$cpt=0;
for ($i=1; $i <sizeof($tab_domaine) ; $i++) { 
if ($tab_domaine[$i]>=$seuil) {
	$tab_retenir[$cpt]=($i);
	$cpt=$cpt+1;
}

}
//print_r($tab_retenir);

$id_prof=$_SESSION['id_profil'];
for ($i=0; $i <sizeof($tab_retenir) ; $i++) { 
	//print_r($tab_retenir[$i]);
$this->model->inserer_domaine($tab_retenir[$i],$id_prof);

$this->rafraichir_VM($tab_retenir[$i]);


}
$this->model->refresh_VM_Commune(); 
	$this->fichier_debug($id,$tab_retenir);

}

function rafraichir_VM($id_dom){

$this->model->get_nomVM($id_dom); 


}

function fichier_debug($id,$tab){
	$str="";
	for ($i=0; $i <sizeof($tab) ; $i++) { 
		$str=$str." ".$tab[$i];
	}
$fp2 = fopen('domaine.txt', 'w');

fwrite($fp2, $id.':'.$str);

fclose($fp2);
	
}



}



?>