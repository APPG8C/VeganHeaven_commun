<?php
function LoadPictures($file,$name,$directory){
	if(isset($file)){
			if(move_uploaded_file($file,$directory.$name)){	
			}
			else{
			echo "Un problème est survenu pendant le transfert";
			}
	}
	else{
		echo "Vous n'avez pas choisi d'image de profil, pour en ajouter une à tous moment, cliquer sur modifier mon profil";
	}
}
?>
<?php
function nomIdentique($utilisateur)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('SELECT`username`FROM users WHERE`username`= ?');
$requete->execute(array($utilisateur));	
$reponse=$requete->fetch();
$USER=$reponse['username'];
	if(isset($USER))
	{
	return 1;	
	}
	else{
	return 0;
	}
}
?>
<?php
function memeAnnonce($Annonce,$idMember)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('SELECT`idAnnonces`,`idMember`FROM panier WHERE`idAnnonces`= ? AND`idMember`=?');
$requete->execute(array($Annonce,$idMember));	
$reponse=$requete->fetch();
$idAnnonces=$reponse['idAnnonces'];
$idMember=$reponse['idMember'];
	if(isset($idAnnonces) AND isset($idMember)) 
	{
	return 1;	
	}
	else{
	return 0;
	}
}
?>
<?php
function ModifierStatutAnnonces($Effectuee,$idAnnonces)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete = $bdd->prepare("UPDATE `db578515750`.`annonces` SET `Effectuee`= ? WHERE `idAnnonces`= ?");  
$requete->execute(array($Effectuee,$idAnnonces));
}
?>
<?php
function Statut_Annonces($idAnnonces)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('SELECT `Effectuee` FROM annonces WHERE `idAnnonces`= ?');    
$requete->execute(array($idAnnonces));
$reponse=$requete->fetch();
$Effectuee=$reponse['Effectuee'];
return $Effectuee;
}
?>
<?php
function Annonces($membre,$effectue)
{

$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('SELECT `Produit`,`idAnnonces`,`Url_Image` FROM annonces WHERE `Members_idMembers`= ? AND `Effectuee`= ?  GROUP BY `DatePublication`');  
$requete->execute(array($membre,$effectue));

while ($donnees = $requete->fetch())
{
	$Produit=$donnees['Produit'];
	$Annonce=$donnees['idAnnonces'];
	$Image=$donnees['Url_Image']; 
   	echo"<table>
   			<tr>
   				<td>
   				<p><span class='marger-produit'><a class='modif' href='globalControleur.php?page=Produits&amp;variable=".$Annonce."'>$Produit:</a>
   				</td>
   				<td>
   				<img class='mini' src='vues/PhotoDeProduit/$Image' width=50px height=35px />
   				</td>
   				<td>
   				<a href='globalControleur.php?page=ModifierAnnonces&amp;idAnnonces=".$Annonce."&amp;Produit=".$Produit."'><button class='submit-button'>Modifier</button></a>
   				</td>
   				<td>
   				<a href='globalControleur.php?page=PageDeProfil&amp;Realisee=".$Annonce."'><button class='submit-button'>Réalisée</button></a>
   				</td>
   			</tr>
   		</table>";   
}
}
?>

<?php
function Suppr_AnnoncesPanier($idMembre_Annonce)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('DELETE FROM panier WHERE `idAnnonces`= ?');  
$requete->execute(array($idMembre_Annonce));
}
?>
<?php
function changerPhoto($membre,$PhotoDeProfil)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare("UPDATE`db578515750`.`users` SET `PhotoDeProfil`=? WHERE `id`=?");  
$requete->execute(array($PhotoDeProfil,$membre));
$PhotoDeProfil=$_FILES['fichier']['name'];
$file=$_FILES["fichier"]["tmp_name"];
$directory= 'vues/PhotoDeProfil/';
LoadPictures($file,$PhotoDeProfil,$directory);
}
?>
<?php
function ModifierChamp($base,$champ,$donnee,$condition,$idMembre)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456'); 
$request = $bdd->prepare("UPDATE `$base` SET `$champ` = ? WHERE `$condition`= ?");
$request->execute(array($donnee,$membre));
$reponse=$request->fetch();
}
?>
<?php
function Moyenne_Note($membre)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456'); 
$requete = $bdd->prepare("SELECT AVG(note) FROM avis  WHERE `idMembre_note`= ?");
$requete->execute(array($membre));
$reponse = $requete->fetch();
$Moyenne = $reponse['AVG(note)'];
return $Moyenne;
}
?>
<?php
function GetAvis_Note($membre,$username)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456'); 
$requete = $bdd->prepare("SELECT `contenu`,`note`FROM avis  WHERE `idMembre_note`= ? GROUP BY `DatePublicationAvis` ASC LIMIT 20 ");
$requete->execute(array($membre));
$Moyenne=Moyenne_Note($membre);
echo"
    <div><legend>Avis des utilisateurs:</legend></div>
    <div class='MoyenneAvis'>Moyenne: $Moyenne/5</div>
    ";
	while($reponse = $requete->fetch())
{
	$note=$reponse['note'];
	$contenu=$reponse['contenu'];
	echo"
       <p>
       <h4>Avis associé sur $username : $note/5</h4>
       <p style ='text-align: justify;'>$contenu</p>
       </p>
      ";
    }
}
?>
<?php
function Recherche($effectuee,$champ){
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete = $bdd->prepare("SELECT `$champ` FROM annonces WHERE `Effectuee`= ? GROUP BY `$champ`");
$requete->execute(array($effectuee));

echo"<select name= $champ>
	<option value=''>$champ :</option>";
while($reponse=$requete->fetch())
{
$donneeProduit=$reponse[$champ];
echo"<option value='$donneeProduit'>$donneeProduit</option>";
}
echo"</select>";
}
?>
<?php
function AnnonceRecente($Id,$jour){
	if(isset($Id)){
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
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
	
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requeteID=$bdd->prepare('SELECT `idAnnonces` FROM `annonces` WHERE `Effectuee`= ? ORDER BY RAND() LIMIT 1');
	$requeteID->execute(array($Effectuee));
	$ID=$requeteID->fetch();
	$idAnnonces=$ID['idAnnonces'];
		if(AnnonceRecente($idAnnonces,$jour)==true){
		$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction`,`idAnnonces` FROM `annonces` WHERE `idAnnonces`= ?');
		$requete->execute(array($idAnnonces));
		$reponse=$requete->fetch();
		$Produit=$reponse['Produit'];
		$Url_Image=$reponse['Url_Image'];
		$Transaction=$reponse['Transaction'];
		$idAnnonces=$reponse['idAnnonces'];
		$table=array($Produit, $Url_Image,$Transaction,$idAnnonces);
	}
	if(isset($table))
	{
	return $table;
	}
	else
		{
		$requete=$bdd->prepare('SELECT `Produit`,`Url_Image`,`Transaction`,`idAnnonces` FROM `annonces` WHERE `idAnnonces`= ?');
		$requete->execute(array($idAnnonces));
		$reponse=$requete->fetch();
		$Produit=$reponse['Produit'];
		$Url_Image=$reponse['Url_Image'];
		$Transaction=$reponse['Transaction'];
		$idAnnonces=$reponse['idAnnonces'];
		$table=array($Produit, $Url_Image,$Transaction,$idAnnonces);
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
$tab3=$tab[3];
	 if(isset($tab0)){
		 echo"<div class='caption'>$tab2: $tab0</div>
		<a href='globalControleur.php?page=Produits&amp;variable=".$tab3."'><img src='vues/PhotoDeProduit/$tab1' width=765px height=400px/></a>";
	}
}
?>
<?php
function TrueId($id)
{
$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$requete=$bdd->prepare('SELECT `id` FROM users WHERE `id`= ?');    
$requete->execute(array($id));
	if($reponse=$requete->fetch())
	{
	return true;
	}
	else
	{
	return false;
	}
}
?>





