<!DOCTYPE html>
<html>
	<head>
        <title>Les annonces</title>
        <h2 class='title'>Gérer les annonces</h2>
    </head>
    <body>
	<form action="GererAnnonces.php"method='POST'>
	<table>
		<tr>
			<td>
			<div class='recherche'>
			Rechercher un Produit:
			<?php
			Defil('Produit','annonces','Effectuee',0);
			?>
			</div>
			</td>
			<td>
			<div class='recherche'>
			Rechercher les annonces d'un Membre:
			<?php
			Defil('Annonceur','annonces','Effectuee',0);
			?>
			</div>
			</td>
			<td>
			<div class='recherche'>
			Rechercher par type de transactions:
			<?php
			Defil('Transaction','annonces','Effectuee',0); 
			?>
			</div>
			</td>
		</tr>
	</table>
</form>	
</body>
</html>