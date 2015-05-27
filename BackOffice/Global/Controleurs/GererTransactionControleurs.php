<?php
include('Vues/GererTransactionVues.php');
if(isset ($_GET["SupprProduit"]) AND isset ($_GET["SupprId"]))
	{
	
	$Produit=htmlspecialchars($_GET["SupprProduit"]);
	$id=$_GET["SupprId"];
	$AnnonceVerif=trueAnnonce($Produit);
	if($AnnonceVerif==$id)
	{
		include('Modeles/GererTransactionModeles.php');
	}
}
if(isset ($_POST["RechercheProduit"]) AND $_POST["RechercheProduit"]!=NULL)
	{
		$donnee=$_POST["RechercheProduit"];
		$annonce=htmlspecialchars($donnee);
		$annonVerif=trueAnnonce('Produit',$annonce);
		if($annonVerif==$annonce)
		{	
		Annonces('Produit',$annonce,1);
		}
	}
	else
	{
	echo"<h3 class='title'>Transactions effectuées</h3>";
	Annonces('Effectuee',1,1);
	}

?>
