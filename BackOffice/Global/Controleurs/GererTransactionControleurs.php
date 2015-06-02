<?php
include('Vues/GererTransactionVues.php');
if(isset($_GET["SupprId"]))
{
$id=htmlspecialchars($_GET["SupprId"]);
include('Modeles/GererTransactionModeles.php');
}

if((isset ($_POST["RechercheProduit"]) AND $_POST["RechercheProduit"]!=NULL )||(isset ($_POST["RechercheAnnonceur"]) AND $_POST["RechercheAnnonceur"]!=NULL) || (isset ($_POST["RechercheTransaction"]) AND $_POST["RechercheTransaction"]!=NULL))
	{
		$donnee1=$_POST["RechercheProduit"];
		$donnee2=$_POST["RechercheAnnonceur"];
		$donnee3=$_POST["RechercheTransaction"];
		Annonces('Produit',$donnee1,1);	
		Annonces('Annonceur',$donnee2,1);	
		Annonces('Transaction',$donnee3,1);	
		
	}
	else
	{
	echo"<h3 class='title'>Transactions récement effectuées</h3>";
	Annonces('Effectuee',1,1);
	}

?>
