<section class="corp">
	<h1 class="annonce">Aspect de votre Annonce</h1>
	
	<?php
	$Detail=stripslashes($Description);
	$produit=stripslashes($Produit);
		echo"
			<p class='info'><span class='marge'> Catégorie: $TypeProduit </span><span class='marge'>$Transaction: $produit</span> <span class='marge'> Lieu: $lieu_transaction</span> 
			<span class='marge'>Département: $departement</span></p>
		
		<table>
			<tr>
				<td>
				<img class='image' src='vues/PhotoDeProduit/$PhotoDeProduit' width=400px height=300px/><br/>
				<p><span class='marger'><a class='modif' href='PageDeProfil.php'> Ma page de profil</a></span></p>
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
</section>
