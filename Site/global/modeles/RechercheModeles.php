<?php
function Menurecherche(){
if(isset($_POST["rechercheMenu"]) AND $_POST["rechercheMenu"]!=NULL)
{
	$donnee=htmlspecialchars($_POST["rechercheMenu"]);
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete=$bdd->prepare('SELECT * FROM annonces WHERE `Produit` LIKE ? OR `Transaction` LIKE ? OR `prix_offre` LIKE ? OR `Categorie` LIKE ? OR `Quantite`LIKE ?');	
	$requete->execute(array('%'.$donnee.'%','%'.$donnee.'%','%'.$donnee.'%','%'.$donnee.'%','%'.$donnee.'%'));
	while($reponse=$requete->fetch()){
	$Produit=$reponse['Produit'];
	$idAnnonces=$reponse['idAnnonces'];
	$Categorie=$reponse['Categorie'];
	$Transaction=$reponse['Transaction'];
	$prix_offre=$reponse['prix_offre'];
	$code_postal=$reponse['code_postal'];
	$Description=$reponse['Description'];
	$Categorie=$reponse['Categorie'];
	$Quantite=$reponse['Quantite'];
	$Url_Image=$reponse['Url_Image'];
	$DatePublication=$reponse['DatePublication'];
	$Effectuee=$reponse['Effectuee'];
		if($Effectuee!=1){
			echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
		";
		}
	}
}
}
?>
<?php
	$compteur=0;
	function AnnonceAleatoire()
	{
	global $compteur;	
	for($i=0; $i<4; $i++)
	{
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete = $bdd->query('SELECT `idAnnonces` FROM annonces ORDER BY RAND() LIMIT 1');
	while($reponse=$requete->fetch()) 
	{
		$idAnnonces=$reponse['idAnnonces'];
	}
	return $idAnnonces;
	$compteur++;
	}
	}

	function AnnonceRecherche()
	//$Produit = 'Oranges';
	{
	if(!isset($_POST["rechercheMenu"])){
	echo"<h1>Des annonces selectionnées par nos soins:</h1>";
	for($i=0; $i<4; $i++)
	{	
	$idAnnonces = AnnonceAleatoire();
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete=$bdd->prepare('SELECT * FROM annonces WHERE `idAnnonces`= ? AND `Effectuee`= ?');	
	$requete->execute(array($idAnnonces,0));
	while($reponse=$requete->fetch()){
	$Produit=$reponse['Produit'];
	$Categorie=$reponse['Categorie'];
	$Transaction=$reponse['Transaction'];
	$prix_offre=$reponse['prix_offre'];
	$code_postal=$reponse['code_postal'];
	$Description=$reponse['Description'];
	$Categorie=$reponse['Categorie'];
	$Quantite=$reponse['Quantite'];
	$Url_Image=$reponse['Url_Image'];
	$idAnnonces=$reponse['idAnnonces'];
	$DatePublication=$reponse['DatePublication'];
	$Date=$reponse['Date'];

	echo "
			<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
	}
	}

}
}

function AnnonceUnique()
{
echo "$compteur";
}
?>
<?php
function Recherche1Champ($champ,$Valeurchamp){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `Effectuee`= ?");
$requete->execute(array($Valeurchamp,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];

echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
	}
}	
?>
<?php
function Recherche2Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `Effectuee`= ?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];

echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
}	
}
?>

<?php
function Recherche3Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=? AND `Effectuee`= ?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];
echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
}
}	
?>
<?php
function Recherche4Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2,$champ3,$Valeurchamp3){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `Effectuee`= ?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2,$Valeurchamp3,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];

echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
}	
}
?>
<?php
function Recherche5Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2,$champ3,$Valeurchamp3,$champ4,$Valeurchamp4){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `$champ4`=? AND `Effectuee`= ?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2,$Valeurchamp3,$Valeurchamp4,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];

echo "
		<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
}	
}
?>
<?php
function Recherche6Champ($champ,$Valeurchamp,$champ1,$champ2,$champ3,$champ4,$champ5){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `Transaction`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `$champ4`=? AND `$champ5`=? AND `Effectuee`= ?");
$requete->execute(array($Transaction,$champ1,$champ2,$champ3,$champ4,$champ5,0));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$Quantite=$reponse['Quantite'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
$idAnnonces=$reponse['idAnnonces'];

echo "
	<div id='divOffre'>
			<table>
				<tr>
					<td>
					<div class='image_offre'>
					<a href='globalControleur.php?page=Produits&amp;variable=".$idAnnonces."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
					</div>
					</td>
					<td>
						<div class='description_offre'>	
						<h3 class='titre_offre'> $Produit </h3>
						Catégorie du produit: $Categorie </br>
						<p class='paragraphe_offre'> Description:<br/>
							$Description
							Code postal : $Quantite </br>
							Prix : $prix_offre € </br>
							Date de péremption : $Date </br>
						</p>
					</div>
					</td>
				</tr>
			</table>
		</div>
	";
}	
}
?>