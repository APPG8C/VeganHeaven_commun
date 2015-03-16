<!DOCTYPE html>
<html>
    <head>
       <?php 
		include("Entete.php");
		setPunchLine($aPropos,true,$texte1="Les offres de nos membres",$texte2="Fruit-yez, Pauvre fous !");
		setTitle($Forum,true,$texte="Voici les offres");
		?>
    </head>
     <body>
		<?php 
			include("Menu.php");
			setImage($Accueil,true,$Image="images/Offres.jpeg");
		?>
		
		<?php include("PiedDePage.php");?>
     
     </body>
    </html>