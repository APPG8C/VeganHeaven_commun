<?php 

	include('./modeles/InformationMembresModeles.php');
	if($MembreInscrit){
	include('./controleurs/MenuControleurs.php');
	}
	else{
	include('./vues/ConnexionInscriptionVues.php');
	echo"Une erreur est survenue, veuillez renseigner de nouveau les champs du formulaire";
	}
?>