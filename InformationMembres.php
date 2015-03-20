<!DOCTYPE html>
<html>
    <head>
		<?php 
		include("Entete.php");
		if(isset($_POST['Prenom'])){
		setTitle($Connexion_Inscription,true,$texte="Bienvenu(e)!!",$texte2="Vos données Personnelles",htmlspecialchars($texte2=$_POST['Prenom']));
		}
		else{
		setPunchLine($InformationMembres,true,$texte1="Vos données Personnelles",$texte2="");
		setTitle($Connexion_Inscription,true,$texte="Bienvenu(e)!!");
		}
		
		?>
    </head>
     <body>
		<?php
			
		
			if($_POST['MotDePasse']===$_POST['ConfirmationMDP'])
			{
			// Vérification de la validité des informations

			// Hachage du mot de passe
			echo htmlspecialchars($_POST['NOM']);echo htmlspecialchars($_POST['Prenom']);echo htmlspecialchars($_POST['VilleActuelle']);echo htmlspecialchars($_POST['Adresse']); echo htmlspecialchars($_POST['DateDeNaissance']);
			echo htmlspecialchars($_POST['TelephoneMobile']); echo htmlspecialchars($_POST['TelephoneFixe']); echo htmlspecialchars($_POST['AdresseEmail']);

			// Insertion
			$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8', 'root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$req = $bdd->prepare('INSERT INTO membres(Nom, Prénom,Ville actuelle,Adresse,Date de Naissance,Téléphone mobile,Téléphone fixe,Email,Mot de passe) VALUES(?,?,?,?,?,?,?,?)');
			$req->execute(array(
			$_POST['NOM'],
			$_POST['Prenom'],
			$_POST['VilleActuelle'],
			$_POST['Adresse'],
			$_POST['DateDeNaissance'],
			$_POST['TelephoneMobile'],
			$_POST['TelephoneFixe'],
			$_POST['AdresseEmail'],
			$_POST['MotDePasse']));
			}
			?>
      
		<?php include("PiedDePage.php");?>
     </body>

    </html>
