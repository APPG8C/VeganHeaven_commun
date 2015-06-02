<section class="corp">
	<h1 class="annonce">Annonce</h1>
	
	<?php
		echo"<div class='infoAnnonce'>
			<span class='marger'>Catégorie: $Categorie</span>
			<span class='marger'>$Transaction: $Titre</span> 
			<span class='marger'> Lieu: $lieu_transaction</span> 
			<span class='marger'>Département: $departement</span> 
			</div>
		
		<table>
			<tr>
				<td>
				<div class='infoAnnonce'>
					<img class='image' src='vues/PhotoDeProduit/$Url_Image' width=350px height=250px />
				</div>
				</td>
				<td >
				<div class='detail'>
						<p class='titreDetail'>Détails</p>
					<p class='description'>
						$Description 
					</p>
					<p class='prix'><div class='date_peremption'>Quantité: $Quantite grammes</div></p>
					<p class='prix'><div class='date_peremption'>Prix (si non echange): $prix_offre euros</div></p>
					<p class='date'><div class='date_peremption'>Date de peremption: $Date </div></p>
					<p class='date'><div class='date_peremption'>Date de publication: $DatePublication</div></p>
					<div>
				</td>
			<tr>
			<td>
			<table>
				<tr>
					<td>";
					if(isset($_SESSION['ID'])){
						if($_SESSION['ID']!=$idMember)
						{
						echo"
						<div class='repondre'>
							<a href='globalControleur.php?page=MonCompte&amp;idMember=".$idMember."&amp;Titre=".$Titre."&amp;Transaction=".$Transaction."&amp;Peremtion=".$Date."&amp;prix_offre=".$prix_offre."&amp;lieu_transaction=".$lieu_transaction."&amp;DatePublication=".$DatePublication."
							&amp;TelephoneMobile=".$TelephoneMobile."&amp;TelephoneFixe=".$TelephoneFixe."&amp;AdresseEmail=".$AdresseEmail."&amp;idAnnonces=".$idAnnonces."&amp;UrlImage=".$UrlImage."'><button class='submit-button'>
							Ajouter au panier</button></a><br/><strong>*Email automatique</strong>
						</div>
							</td>
						</tr>
						<tr>
							<td>
							<p>*En ajoutant cette offre au panier, un mail automatique est envoyé à l'annonceur qui mentionne votre interêt pour l'offre.</p>
							</td>";
						}
					}
				echo"</tr>
			</table>
			</td>
			
		";
		if(isset($_SESSION['ID'])){
			if($_SESSION['ID']!=$idMember){
				echo"
					<td>
				<div class='coordonees'>
					<p class='titreDetail'>Contact</p>

					<p class='coordoneesTTA'>TelephoneMobile: $TelephoneMobile</p>
					<p class='coordoneesTTA'>TelephoneFixe: $TelephoneFixe</p>
					<p class='coordoneesTTA'>AdresseEmail: $AdresseEmail <span class='marger'><a class='modif' href='globalControleur.php?page=PageDeProfil&amp;idMember=".$idMember."''>Profil du Membre</a></span><br/></p>
					
				</div>
				</td>
			</tr>";
			}
		}
		echo"</table>";
	?>	
</section>
