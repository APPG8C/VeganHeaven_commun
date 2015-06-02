<!DOCTYPE html>
<html>
    <head>
        <title>Les membres</title>
        <h2 class='title'>Gérer les membres</h2>
    </head>
<body>
<form action="Administration.php?page=GererMembre"method='POST'>
	
	<table>
		<tr>
			<td>
			<div class='recherche'>
				Rechercher par Nom
				<?php
				Defil('username','users','Admin',0);
				?>
			</div>
			</td>
			<td>
			<div class='recherche'>
				Rechercher par Ville:
				<?php
				Defil('Ville','users','Admin',0);
				?>
			</div>
			</td>
			<td>
			<div class='recherche'>
				Rechercher par Age:
				<?php
				Defil('Age','users','Admin',0); 
				?>
			</div>
			</td>
		</tr>
	</table>
</form>	
</body>
</html>