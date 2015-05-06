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
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
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
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
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
?>
<?php
function ModifierStatut_Annonces($Effectuee,$idAnnonces)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("UPDATE `membre`.`annonces` SET `Effectuee`= ? WHERE `idAnnonces`= ?");  
$requete->execute(array($Effectuee,$idAnnonces));
}
?>
<?php
function Statut_Annonces($idAnnonces)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
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
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('SELECT `Produit`,`idAnnonces`,`Url_Image` FROM annonces WHERE `Members_idMembers`= ? AND `Effectuee`= ?  GROUP BY `DatePublication`');  
$requete->execute(array($idMembre,$effectue));

while ($donnees = $requete->fetch())
{
	$Produit=$donnees['Produit'];
	$Annonce=$donnees['idAnnonces'];
	$Image=$donnees['Url_Image'];
	if($Annonce%2==0)
	{
   	echo"<span class='marger-produit'><a class='modif' href='Produits.php?variable=".$Produit."'>$Produit:</a></span>";
   	echo"<span class='marg'><img class='mini' src='vues/PhotoDeProduit/$Image' width=50px height=35px /></span><span class='marg'><a href='PageDeProfil.php?Realisee=".$Annonce."'><button class='submit-button'>Réalisée</button></a></span>";
  
   	
   	}
   else
   {
	echo"<p class='infor'><span class='marger-produit'><a class='modif' href='Produits.php?variable=".$Produit."'>$Produit:</a></span>";
   	echo"<span class='marg'><img class='mini' src='vues/PhotoDeProduit/$Image' width=50px height=35px /></span><span class='marg'><a href='PageDeProfil.php?Realisee=".$Annonce."'><button class='submit-button'>Réalisée</button></a></span></p>";
   	echo"";
   }  
}
}
?>
<?php
function AutomaticMail($user,$EmailBy,$EmailGive,$text,$transaction,$produit)
{
			ini_set("SMTP","smtp.sfr.fr");
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
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('DELETE FROM panier WHERE `idAnnonces`= ?');  
$requete->execute(array($idMembre_Annonce));
}
?>
<?php
function changerPhoto($idMembre,$PhotoDeProfil)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
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
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root'); 
$request = $bdd->prepare("UPDATE `users` SET `$champ` = ? WHERE `id`= ?");
$request->execute(array($donnee,$idmembre));
$reponse=$request->fetch();
}
?>


