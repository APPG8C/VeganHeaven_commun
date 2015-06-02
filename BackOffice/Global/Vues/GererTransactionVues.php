<!DOCTYPE html>
<html>
	<head>
        <title>Les Transactions</title>
        <h2 class='title'>Gérer les Transactions</h2>
    </head>
    <body>
	<form action="Administration.php?page=GererTransaction"method='POST'>
		<table>
		<tr>
			<td>
			<div class='recherche'>
			Rechercher un Produit:
			<?php
			Defil('Produit','annonces','Effectuee',1);
			?>
			</div>
			</td>
			<td>
			<div class='recherche'>
			Rechercher les annonces d'un Membre:
			<?php
			Defil('Annonceur','annonces','Effectuee',1);
			?>
			</div>
			</td>
			<td>
			<div class='recherche'>
			Rechercher par type de transactions:
			<?php
			Defil('Transaction','annonces','Effectuee',1); 
			?>
			</div>
			</td>
		</tr>
	</table>
</form>	
</body>
</html>