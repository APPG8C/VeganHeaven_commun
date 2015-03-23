<?php 
	include('/../modeles/MenuModeles.php');
	if(isset($_POST['Prenom'])){
		setTitle($texte="Vos données Personnelles",htmlspecialchars($texte2=$_POST['Prenom']));
		
	}
	else{
		setTitle($texte="Vos données Personnelles",$texte2="");
		
	}
	include('/../vues/InformationMembresVues.php');
	include('/../modeles/InformationMembresModeles.php');
	
?>