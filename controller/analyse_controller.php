<?php	
include_once("../model/Model.php");

class analyse_controller {

public $model;
public function __construct()
    {
	
        $this->model = new Model();

    }
	


 public function get_random_requete_simple(){
	$tab_req=array();
		$tab_req_pa=array();
	

$res=$this->model->get_requete_simple();
for( $i=0;$i<10;$i++){ //il faut verifier qu'il n ya pas de duplication
	 $random = rand(0,142); 
	array_push($tab_req,$res[$random]);
}

	
$fp = fopen('req.txt', 'w');

for( $j=0;$j<10;$j++){
	$res_pa=$this->model->get_pa_requete_simple($tab_req[$j]);
		$res_nb=$this->model->get_nb($tab_req[$j]);
	if($j==9){
		fwrite($fp,$tab_req[$j].$res_pa."?".$res_nb);
	}
	else{
	fwrite($fp,$tab_req[$j].$res_pa."?".$res_nb."\n");	
	}
	
}

fclose($fp);

}


}
?>
