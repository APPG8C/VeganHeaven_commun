<section class="corp">
	<h1 class="annonce">Annonce</h1>
	
	<?php
		echo"
			<p class='info'><span class='marge'> Catégorie: $Categorie </span><span class='marge'>$Transaction: $Produit</span> <span class='marge'> Lieu: $lieu_transaction</span> 
			<span class='marge'>Département: $departement</span></p>
		
		<table>
			<tr>
				<td>
				<img class='image' src='vues/PhotoDeProduit/$Url_Image' width=400px height=300px />
				</td>
				<td >
					<div class='detail'>
						<p class='titreDetail'>Détails</p>
					<p class='description'>
						$Description 
					</p>
					<p class='prix'><span class='date_peremption'>Prix (si non echange): $prix_offre euros</span></p>
					<p class='date'><span class='date_peremption'>Date de peremption: $Date </span></p>
					<div>
				</td>
		</table>
		<table>
		<tr>
			<td>
		<p class='info' ><span class='marge'>Date de publication: $DatePublication</span></p>
			</td>
			<td>
			<div class='coordonees'>
				<p class='contact'>Contact</p>
				<p class='coordoneesTTA'><span class=''>TelephoneMobile: $TelephoneMobile</span></p>
				<p class='coordoneesTTA'coordoneesTTA''><span class=''>TelephoneFixe: $TelephoneFixe </span></p>
				<p class='coordoneesTTA''><span class=''>AdresseEmail: $AdresseEmail </span></p>
			</div>
			</td>
		</tr>
		</table>
		
		";

	?>	
</section>
