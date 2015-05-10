
<?php
function AnnonceRecente($Id,$jour){
	if(isset($Id)){
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT DAY(DatePublication),DAY(NOW()),MONTH(DatePublication),MONTH(NOW()),YEAR(DatePublication),YEAR(NOW()) FROM annonces WHERE `idAnnonces`=?');
	$requete->execute(array($Id));
	$reponse=$requete->fetch();
	$jourPublication=$reponse['DAY(DatePublication)'];
	$jourActuel=$reponse['DAY(NOW())'];
	$moisPublication=$reponse['MONTH(DatePublication)'];
	$moisActuel=$reponse['MONTH(NOW())'];
	$AnneePublication=$reponse['YEAR(DatePublication)'];
	$AnneeActuel=$reponse['YEAR(NOW())'];
	$difference=$jourActuel-$jourPublication;

	if($AnneePublication==$AnneeActuel){
		if($moisPublication==$moisActuel){
			if($difference<$jour){
					return true;
			}		
		}
	}
}
}
?>
<?php
function JourPublication($jour,$Effectuee){
	
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requeteID=$bdd->prepare('SELECT `idAnnonces` FROM `annonces` WHERE `Effectuee`= ? ORDER BY RAND() LIMIT 1');
	$requeteID->execute(array($Effectuee));
	$ID=$requeteID->fetch();
	$idAnnonces=$ID['idAnnonces'];
		if(AnnonceRecente($idAnnonces,$jour)==true){
		$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction` FROM `annonces` WHERE `idAnnonces`= ?');
		$requete->execute(array($idAnnonces));
		$reponse=$requete->fetch();
		$Produit=$reponse['Produit'];
		$Url_Image=$reponse['Url_Image'];
		$Transaction=$reponse['Transaction'];
		$table=array($Produit, $Url_Image,$Transaction);
	}
	if(isset($table))
	{
	return $table;
	}
	else
		{
		$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction` FROM `annonces` WHERE `idAnnonces`= ?');
		$requete->execute(array($idAnnonces));
		$reponse=$requete->fetch();
		$Produit=$reponse['Produit'];
		$Url_Image=$reponse['Url_Image'];
		$Transaction=$reponse['Transaction'];
		$table=array($Produit, $Url_Image,$Transaction);
		return  $table;
		}
}
?>
<?php
function carroussel(){
$tab=JourPublication(10,0);
$tab0=$tab[0];
$tab1=$tab[1];
$tab2=$tab[2];
	 if(isset($tab0) || isset($_SESSION['member'])){
		 echo"<div class='caption'>$tab2: $tab0</div>
		<a href='Produits.php?variable=".$tab0."'><img src='vues/PhotoDeProduit/$tab1' width=765px height=400px/></a>";
	}
}
?>
