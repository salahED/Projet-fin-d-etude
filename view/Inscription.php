<?php
if(!empty($_POST)) {
include_once("controller/Controller.php");
$controller = new Controller();
$controller->verifier_login();	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/mainn.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" id="form" name="form" method="post">
					<span class="login100-form-title">
						Demande d'inscription
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="veuillez entrer votre nom et prénom">
						<input class="input100" type="text" name="nom" placeholder="Nom Prénom" required="required">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate="veuillez entrer votre Email">
						<input class="input100" type="text" name="Email" placeholder="Email" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="veuillez entrer le nom de l'organisme">
							
						<select class="input100" style="border: none;">
						  <option value="obj">Organisme</option>
						  <option value="CNPSR">CNPSR</option>
						  <option value="ENACTA">ENACTA</option>
						  <option value="G">Gendarmerie Nationale</option>
						  <option value="tp">Ministère des traveaux publics</option>
						</select>
						
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "veuillez entrer ID">
						<input class="input100" type="text" name="id" placeholder="ID" required="required">
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "veuillez entrer votre poste">
						<input class="input100" type="text" name="Poste" placeholder="Poste" required="required">
						<span class="focus-input100"></span>
					</div>
					<br>

					

					<div class="container-login100-form-btn">
						
						
		<input class="login100-form-btn"
      type="submit" name="envoyer" id="envoyer" value="Valider" />
						
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						

					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>