<!DOCTYPE html>
<html>
	<head>
        <title>Les Transactions</title>
        <h2 class='title'>Gérer les Transactions</h2>
    </head>
    <body>
	<form action="GererTransaction.php"method='POST'>
	<div>Rechercher un Produit
		<?php
		Defil('Produit','annonces','Effectuee',1);
		?>
	</div>
</form>	
</body>
</html>