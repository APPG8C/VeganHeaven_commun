<?php
include('Commun/fonction.php');
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" />
    <link rel='stylesheet' href='Vues/BackOffice.css'>
</head>

    <body>
    	<title>Administration</title>
        <h1 class="site">VeganHeaven</h1><h2 class="title">Administration</h2>
    	<nav class="onglets">
			<ul>
			<li><a href='Administration.php?page=GererMembre'><img class='logo' src='Vues/Images/VeganHeavenCherry_thumb.png'/></a></li>	
			<li class="men"><a href="Administration.php?page=GererMembre">Gérer les Membres</a></li>
			<li class="men" ><a href="Administration.php?page=GererAnnonces">Gérer les annonces</a></li>
			<li class="men"><a href="Administration.php?page=GererForum">Gérer le forum</a></li>
			<li class="men"><a href="Administration.php?page=GererTransaction">Transactions effectuées</a></li>
			<?php
				if(isset($_SESSION['ID'])){
				echo"
						<li class='men'><a href= 'Administration.php?page=Deconnexion'>Deconnexion</a></li>
					";

				}
				?>
				
			</ul>	
		</nav>
    </body>
</html>