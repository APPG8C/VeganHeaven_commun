<div class="corp">
	<h1 class="annonce">Aspect de votre Annonce</h1>
	
	<?php
	$Detail=stripslashes($Description);
	$produit=stripslashes($Produit);
		echo"
			<div class='info'><div class='marge'> Catégorie: $TypeProduit </div><div class='marge'>$Transaction: $produit</div> <div class='marge'> Lieu: $lieu_transaction</div> 
			<div class='marge'>Département: $departement</div></div>
		
		<table>
			<tr>
				<td>
				<img class='image' src='vues/PhotoDeProduit/$PhotoDeProduit' width=400px height=300px/><br/>
				<p><div class='marger'><a class='modif' href='globalControleur.php?page=PageDeProfil'> Ma page de profil</a></div></p>
				</td>
				<td >
					<div class='detail'>
						<p class='titreDetail'>Détails</p>
					<p class='description'>
						$Detail 
					</p>
					<p class='prix'><span class='date_peremption'>Quantité: $Quantite</span></p>
					<p class='prix'><span class='date_peremption'>Prix (si non echange): $prix_offre euros</span></p>
					<p class='date'><span class='date_peremption'>Date de peremption: $Peremption </span></p>
					<div>
				</td>
				
		</table>";
	?>	
</div>
