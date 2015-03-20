<!DOCTYPE html>
<html>
    <head>
		<?php 
		include("Entete.php");
		setTitle($Connexion_Inscription,true,$texte="Inscription et Connexion",$texte2="Rejoignez-nous");
		
		?>
    </head>
     <body>
		<?php
			
			$passe = htmlspecialchars($_POST['MotDePasse']);
			$passe2 = htmlspecialchars($_POST['ConfirmationMDP']);
		
			if($passe===$passe2)
			{
		// Vérification de la validité des informations

		// Hachage du mot de passe
		$pass_hache = sha1($_POST['MotDePasse']);

		// Insertion
		$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$req = $bdd->prepare('INSERT INTO menbres(ID_Membre, Nom, Prénom,Ville actuelle,Adresse,Date de Naissance,Téléphone mobile,Téléphone fixe,Email,Mot de passe) VALUES(?,?,?,?,?,?,?,?)');
		$req->execute(array($_POST['Nom'],$_POST['Prenom'],$_POST['VilleActuelle'],$_POST['Adresse'],$_POST['DateDeNaissance'],$_POST['TelephoneMobile'],$_POST['TelephoneFixe'],$_POST['AdresseEmail']),$pass_hache);
			}
	?>
	</body>

    </html>
	
	