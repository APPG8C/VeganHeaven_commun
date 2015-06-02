<?php
include('Vues/GererMembreVues.php');
if(isset ($_GET["SupprUser"]) AND isset ($_GET["SupprId"]))
{
	
	$user=htmlspecialchars($_GET["SupprUser"]);
	$id=$_GET["SupprId"];
	$userVerif=trueMember('id',$id);
	if($userVerif==$user)
	{
		include('Modeles/GererMembreModeles.php');
	}
}
	if((isset ($_POST["Rechercheusername"]) AND $_POST["Rechercheusername"]!=NULL)||(isset ($_POST["RechercheVille"]) AND $_POST["RechercheVille"]!=NULL)||(isset ($_POST["RechercheAge"]) AND $_POST["RechercheAge"]!=NULL))
	{
		$user=$_POST["Rechercheusername"];
		Membre('username',$user);	
		$Ville=$_POST["RechercheVille"];
		Membre('Ville',$Ville);	
		$Age=$_POST["RechercheAge"];	
		Membre('Age',$Age);		
	}
	else
	{
	echo"<h3 class='title'>Membres récement inscrits</h3>";
	Membre('Admin',0);
	}


?>