<!DOCTYPE html>
<html>
    <head>
		<?php 
		include("Entete.php");
		setPunchLine($Connexion_Inscription,true,$texte1="Inscription et Connexion",$texte2="Rejoignez-nous, vous êtes tous à croquer");
		setTitle($Connexion_Inscription,true,$texte="Rejoignez-nous");
		?>
    </head>
     <body>
        <div>
		
       <?php include("Menu.php");?>
	   
        </div>
		<?php include("PiedDePage.php");?>
     </body>

    </html>