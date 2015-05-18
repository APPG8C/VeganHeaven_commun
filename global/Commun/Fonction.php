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
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
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
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
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
function ModifierStatut_Annonces($Effectuee,$idAnnonces)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("UPDATE `membre`.`annonces` SET `Effectuee`= ? WHERE `idAnnonces`= ?");  
$requete->execute(array($Effectuee,$idAnnonces));
}
?>
<?php
function Statut_Annonces($idAnnonces)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('SELECT `Effectuee` FROM annonces WHERE `idAnnonces`= ?');    
$requete->execute(array($idAnnonces));
$reponse=$requete->fetch();
$Effectuee=$reponse['Effectuee'];
return $Effectuee;
}
?>
<?php
function Annonces($idMembre)
{
$effectue=0;
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('SELECT `Produit`,`idAnnonces`,`Url_Image` FROM annonces WHERE `Members_idMembers`= ? AND `Effectuee`= ?  GROUP BY `DatePublication`');  
$requete->execute(array($idMembre,$effectue));

while ($donnees = $requete->fetch())
{
	$Produit=$donnees['Produit'];
	$Annonce=$donnees['idAnnonces'];
	$Image=$donnees['Url_Image'];
	echo"<p class='infor'><span class='marger-produit'><a class='modif' href='Produits.php?variable=".$Produit."'>$Produit:</a></span>";
   	echo"<span class='marg'><img class='mini' src='vues/PhotoDeProduit/$Image' width=50px height=35px /></span><span class='marg'><a href='PageDeProfil.php?Realisee=".$Annonce."'><button class='submit-button'>Réalisée</button></a></span></p>";    
}
}
?>
<?php
function AutomaticMail($user,$EmailBy,$EmailGive,$text,$transaction,$produit)
{
			ini_set("SMTP","SMTP.WIFIRST.NET");
			$mail ="$EmailGive";	
			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
			{
			$passage_ligne = "\r\n";
			}
			else
			{
			$passage_ligne = "\n";
			}
			//=====Déclaration des messages au format texte et au format HTML.
			
			$message_txt = "$text";
			$message_html = "<html><head></head><body><b>Bonjour</b>, je suis un membre de VeganHeaven et je suis interessé par vôtre $transaction nommé(e) <i>$produit</i>.</body></html>";
			//==========
 
			//=====Création de la boundary
			$boundary = "-----=".md5(rand());
			//==========
 
		//=====Définition du sujet.
		$sujet = "$user est interessé par votre $transaction";
		//=========
 
		//=====Création du header de l'e-mail.
		$header = "From: \"VeganHeaven\"<$EmailBy>".$passage_ligne;
		$header.= "Reply-to: \"$user\" <$EmailBy>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
		mail($mail,$sujet,$message,$header);

}
?>
<?php
function Suppr_AnnoncesPanier($idMembre_Annonce)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('DELETE FROM panier WHERE `idAnnonces`= ?');  
$requete->execute(array($idMembre_Annonce));
}
?>
<?php
function changerPhoto($idMembre,$PhotoDeProfil)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("UPDATE`membre`.`users` SET `PhotoDeProfil`=? WHERE `id`=?");  
$requete->execute(array($PhotoDeProfil,$idMembre));
$PhotoDeProfil=$_FILES['fichier']['name'];
$file=$_FILES["fichier"]["tmp_name"];
$directory= 'vues/PhotoDeProfil/';
LoadPictures($file,$PhotoDeProfil,$directory);
}
?>
<?php
function ModifierChampProfil($champ,$donnee,$idmembre)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root'); 
$request = $bdd->prepare("UPDATE `users` SET `$champ` = ? WHERE `id`= ?");
$request->execute(array($donnee,$idmembre));
$reponse=$request->fetch();
}
?>
<?php
function Moyenne_Note($idmembre)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root'); 
$requete = $bdd->prepare("SELECT AVG(note) FROM avis  WHERE `idMembre_note`= ?");
$requete->execute(array($idmembre));
$reponse = $requete->fetch();
$Moyenne = $reponse['AVG(note)'];
return $Moyenne;
}
?>
<?php
function GetAvis_Note($idmembre,$username)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root'); 
$requete = $bdd->prepare("SELECT `contenu`,`note`FROM avis  WHERE `idMembre_note`= ? GROUP BY `DatePublicationAvis` LIMIT 2 ");
$requete->execute(array($idmembre));
$Moyenne=Moyenne_Note($idmembre);
echo"
    <legend> Avis des utilisateurs</legend>";
	while($reponse = $requete->fetch()){
	$note=$reponse['note'];
	$contenu=$reponse['contenu'];
	echo"
        
       <p>
       	Note attribuée: $note/5<br/>
       <span style ='text-align: justify;'>Avis associé sur $username :<br/>
       $contenu
       </span>
       </p>
      ";
    }
 echo" Moyenne des notes: <br/>$Moyenne/5"; 
}
?>
<?php
function Recherche($effectuee,$champ){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT `$champ` FROM annonces WHERE `Effectuee`= ? GROUP BY `$champ`");
$requete->execute(array($effectuee));

echo"<p><select name= $champ>
	<option value=''>$champ :</option>";
while($reponse=$requete->fetch())
{
$donneeProduit=$reponse[$champ];
echo"<option value='$donneeProduit'>$donneeProduit</option>";
}
echo"</select></p>";
}
?>
<?php
function Recherche1Champ($champ,$Valeurchamp){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ?");
$requete->execute(array($Valeurchamp));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
	}
}	
?>
<?php
function Recherche2Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=?");
$requete->execute(array($Valeurchamp,$Valeurchamp1));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
}	
}
?>

<?php
function Recherche3Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];
echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
}
}	
?>
<?php
function Recherche4Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2,$champ3,$Valeurchamp3){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2,$Valeurchamp3));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
}	
}
?>
<?php
function Recherche5Champ($champ,$Valeurchamp,$champ1,$Valeurchamp1,$champ2,$Valeurchamp2,$champ3,$Valeurchamp3,$champ4,$Valeurchamp4){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `$champ`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `$champ4`=?");
$requete->execute(array($Valeurchamp,$Valeurchamp1,$Valeurchamp2,$Valeurchamp3,$Valeurchamp4));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption</br>
			</p>
		</div>

	</div>
	";
}	
}
?>
<?php
function Recherche6Champ($champ,$Valeurchamp,$champ1,$champ2,$champ3,$champ4,$champ5){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `Transaction`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `$champ4`=? AND `$champ5`=?");
$requete->execute(array($Transaction,$champ1,$champ2,$champ3,$champ4,$champ5));
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
}	
}
?>
<?php
function Recherche7Champ($champ,$Valeurchamp,$champ1,$champ2,$champ3,$champ4,$champ5,$champ6){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare("SELECT * FROM annonces WHERE `Transaction`= ? AND `$champ1`=? AND `$champ2`=? AND `$champ3`=? AND `$champ4`=? AND `$champ5`=?,AND `$champ6`=?");
$requete->execute(array($Transaction,$champ1,$champ2,$champ3,$champ4,$champ5,$champ6));
$reponse=$requete->fetch();
while($reponse=$requete->fetch()){
$Produit=$reponse['Produit'];
$Categorie=$reponse['Categorie'];
$Transaction=$reponse['Transaction'];
$prix_offre=$reponse['prix_offre'];
$code_postal=$reponse['code_postal'];
$Description=$reponse['Description'];
$Categorie=$reponse['Categorie'];
$Url_Image=$reponse['Url_Image'];
$DatePeremption=$reponse['Date'];

echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				Prix : $prix_offre € </br>
				Date de péremption : $DatePeremption </br>
			</p>
		</div>

	</div>
	";
}
}	
?>
<?php
function AnnonceRecente($Id,$jour){
	if(isset($Id)){
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
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
	
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
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
<?php
function TrueId($id)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
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





