<?php	
include_once("../model/Model.php");

class analyse_controller {

public $model;
public function __construct()
    {
	
        $this->model = new Model();

    }
	


 public function get_random_requete_spatial(){
	$tab_req=array();
	$tab_req_pa=array();	

$res=$this->model->get_requete_spatial();
for( $i=0;$i<5;$i++){ //il faut verifier qu'il n ya pas de duplication
	 $random = rand(1,29); 
	array_push($tab_req,$res[$random]);

}

	
$fp = fopen('req2.txt', 'w');

for( $j=0;$j<5;$j++){
	$res_theme=$this->model->get_theme_spatial($tab_req[$j]);
	$res_pa=$this->model->get_pa_spatial($tab_req[$j]);
	if($j==4){
		fwrite($fp,$tab_req[$j].",".$res_theme.$res_pa);
	}
	else{
	fwrite($fp,$tab_req[$j].",".$res_theme.$res_pa."\n");	
	}
	
}

fclose($fp);

}


}
?>
