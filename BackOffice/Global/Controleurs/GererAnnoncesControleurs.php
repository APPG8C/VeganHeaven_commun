<?php
include('Vues/GererAnnoncesVues.php');
if(isset($_GET["SupprId"]))
{
$id=htmlspecialchars($_GET["SupprId"]);
include('Modeles/GererAnnoncesModeles.php');	
}


if((isset ($_POST["RechercheProduit"]) AND $_POST["RechercheProduit"]!=NULL )||(isset ($_POST["RechercheAnnonceur"]) AND $_POST["RechercheAnnonceur"]!=NULL) || (isset ($_POST["RechercheTransaction"]) AND $_POST["RechercheTransaction"]!=NULL))
	{
		$donnee1=$_POST["RechercheProduit"];
		$donnee2=$_POST["RechercheAnnonceur"];
		$donnee3=$_POST["RechercheTransaction"];
		
		Annonces('Produit',$donnee1,0);	
		Annonces('Annonceur',$donnee2,0);	
		Annonces('Transaction',$donnee3,0);	
	}
	else
	{
	echo"<h3 class='title'>Annonces récement publiées</h3>";
	Annonces('Effectuee',0,0);
	}

?>