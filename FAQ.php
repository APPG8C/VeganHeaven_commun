<!DOCTYPE html>
<html>
    <head>
       <?php 
		include("Entete.php");
		setPunchLine($aPropos,true,$texte1="Aide en ligne",$texte2="Souriez vous êtes accompagné");
		setTitle($aPropos,true,$texte="Aide en ligne");
		?>
    </head>
     <body>
        <div>
		
       <?php include("Menu.php");?>
	   
        </div>
		<?php include("PiedDePage.php");?>
     
     </body>
    </html>