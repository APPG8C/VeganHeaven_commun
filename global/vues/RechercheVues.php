<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
	</head>


	<body>
	<div id='divGlobal'>
		<div id="rechercheOffre">
			<legend id='recherche_avancee'><h2> Recherche avancée </h2></legend> 
			<form action="Recherche.php?Transaction='.$Transaction.'&amp;Categorie='.$Categorie.'&amp;Produit='.$Produit.'&amp;Date='.$Date.'&amp;prix_offre='.$prix_offre.'
				&amp;code_postal='.$code_postal.'&amp;Annonceur='.$Annonceur.'&amp;Quantite='.$Quantite.'">
				<label class='form-title'> Type de transaction:
					<p>
						<select name="Transaction">
							<option value=''>Transaction:</option>
							<option value="Vente">Vente</option>
							<option value="Echange">Echange</option>
							<option value="Demande">Demande</option>
						</select>
					</p>
				</label>
				<label class='form-title'> Type de produit:
					<p>
						<select name="Categorie">
							<option value=''>Categorie:</option>
							<option value="fruit">Fruit</option>
							<option value="legumes">Légumes</option>
							<option value="graines">Graines</option>
							<option value="autres">Autres</option>
						</select>
					</p>
				</label>
			<div class='form-title'>Produit: </div>
				<?php
				Recherche(0,"Produit");
				?>
		</div>

		<div id="MenuCentre">
			<h2 id='recherche-titre'> Informations complémentaires </h2>
				<div class='form-title'>Quantité: </div>
				<?php
				Recherche(0,"Quantite");
				?>
				<div class='form-title'>Membres: </div>
				<?php
				Recherche(0,"Annonceur");
				?>
				<div class='form-title'>Dates de péremption: </div>
				<?php
				Recherche(0,"Date");
				?>
				<div class='submit-container'>
				<input class='submit-button' id='submit-button-search' type='submit' value='rechercher' />				
				</div>
			</form>
		</div>
	</div>
	</body>
	<?php
	if(isset($_GET["Transaction"]) AND isset($_GET["Categorie"]) AND isset($_GET["Produit"]) AND isset($_GET["Date"]) AND isset($_GET["Annonceur"]) AND isset($_GET["Quantite"])){
	RechercheTotale();
	}
	else
	{	
	AnnonceRecherche();
	}
	?>
</html> 