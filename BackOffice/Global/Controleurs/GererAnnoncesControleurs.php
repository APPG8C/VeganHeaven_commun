<?php
include('Vues/GererAnnoncesVues.php');
if(isset ($_GET["SupprProduit"]) AND isset ($_GET["SupprId"]))
	{
	
	$Produit=htmlspecialchars($_GET["SupprProduit"]);
	$id=$_GET["SupprId"];
	$AnnonceVerif=trueAnnonce($Produit);

	if($AnnonceVerif==$id)
	{
		include('Modeles/GererAnnoncesModeles.php');
	}
}


if((isset ($_POST["RechercheProduit"]) AND $_POST["RechercheProduit"]!=NULL )||(isset ($_POST["RechercheAnnonceur"]) AND $_POST["RechercheAnnonceur"]!=NULL) || (isset ($_POST["RechercheTransaction"]) AND $_POST["RechercheTransaction"]!=NULL))
	{
		$donnee1=$_POST["RechercheProduit"];
		$donnee2=$_POST["RechercheAnnonceur"];
		$donnee3=$_POST["RechercheTransaction"];
		if(isset($donnee1))
		{
		Annonces('Produit',$donnee1,0);	
		}
		if(isset($donnee2))
		{
		Annonces('Annonceur',$donnee2,0);	
		}
		if(isset($donnee3))
		{
		Annonces('Transaction',$donnee3,0);	
		}
	}
	else
	{
	echo"<h3 class='title'>Annonces récement publiées</h3>";
	Annonces('Effectuee',0,0);
	}

?>