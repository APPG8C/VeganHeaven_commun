<!DOCTYPE html>
<html>
    <head>
		<?php 
		include("Entete.php");
		setPunchLine($InformationMembres,true,$texte1="Vos données Personnelles",htmlspecialchars($texte2=$_POST['Prenom']));
		setTitle($Connexion_Inscription,true,$texte="Bienvenu(e)!!");
		?>
    </head>
     <body>
		<div>
       <?php include("Menu.php");?>
        </div>
		<?php
		if (isset($_POST['MotDePasse']) AND isset($_POST['ConfirmationMDP']))
		{
			if( $_POST['MotDePasse']==$_POST['ConfirmationMDP']=!NULL)
			{
			echo htmlspecialchars($_POST['NOM']);echo htmlspecialchars($_POST['Prenom']);echo htmlspecialchars($_POST['VilleActuelle']);echo htmlspecialchars($_POST['Adresse']); echo htmlspecialchars($_POST['DateDeNaissance']);
			echo htmlspecialchars($_POST['TelephoneMobile']); echo htmlspecialchars($_POST['TelephoneFixe']); echo htmlspecialchars($_POST['AdresseEmail']);	
			}
			else
			{
			echo"Mot de passe ou Confirmation du mot de passe invalide";	
			echo "<a href ='ConnexionInscription.php'>Veuillez ressaisir vos informations personelles </a>";
			}
		}
		?>
      
		<?php include("PiedDePage.php");?>
     </body>

    </html>
