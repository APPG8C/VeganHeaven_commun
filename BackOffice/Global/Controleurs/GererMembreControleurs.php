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
	if(isset ($_POST["Rechercheusername"]) AND $_POST["Rechercheusername"]!=NULL)
	{
		$user=$_POST["Rechercheusername"];
		$userVerif=trueMember('username',$user);
		if($userVerif)
		{
		$Member=htmlspecialchars($user);	
		Membre('username',$Member);	
		}
	}
	else
	{
	echo"<h3 class='title'>Membres récement inscrits</h3>";
	Membre('Admin',0);
	}


?>