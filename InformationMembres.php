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
			mysql_connect("localhost", "root", "");
			mysql_select_db("inscription");
			$passe = mysql_real_escape_string(htmlspecialchars($_POST['MotDePasse']));
			$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['ConfirmationMDP']));
		
			if( $passe==$passe2=!NULL)
			{
			echo htmlspecialchars($_POST['NOM']);echo htmlspecialchars($_POST['Prenom']);echo htmlspecialchars($_POST['VilleActuelle']);echo htmlspecialchars($_POST['Adresse']); echo htmlspecialchars($_POST['DateDeNaissance']);
			echo htmlspecialchars($_POST['TelephoneMobile']); echo htmlspecialchars($_POST['TelephoneFixe']); echo htmlspecialchars($_POST['AdresseEmail']);
			mysql_query("INSERT INTO inscription VALUES('','$_POST['NOM']','$_POST['Prenom']','$_POST['VilleActuelle']','$_POST['Adresse']', '$_POST['DateDeNaissance']','$_POST['TelephoneMobile']','$_POST['TelephoneFixe']','$_POST['AdresseEmail']')");
			
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
