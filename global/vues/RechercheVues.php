<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
	</head>


	<body>
	<div id='divGlobal'>
		<div id="rechercheOffre">
			<legend id='recherche_avancee'><h2> Recherche avancée </h2></legend> 
			<form action='RecherchesOffres.php' class='Formulaire-recherche'method='POST'>
				<label class='form-title'> Type de transaction:
					<p>
						<select name="Transaction">
							<option value="Vente">Vente</option>
							<option value="Echange">Echange</option>
							<option value="Demande">Demande</option>
						</select>
					</p>
				</label>
				<label class='form-title'> Type de produit:
					<p>
						<select name="Categorie">
							<option value="fruit">fruit</option>
							<option value="legumes">Légumes</option>
							<option value="graines">Graines</option>
							<option value="autres">Autres</option>
						</select>
					</p>
				</label>
			<div class='form-title'>Produit: 
				</div>
				<input class='form-field' type='text' name='Produit' /><br />
				<div class='form-title'>Dates de péremption: 
				</div>
				<input class='form-field' type='text' name='date' /><br />
			</div>

		<div id="MenuCentre">
			<h2 id='recherche-titre'> Informations complémentaires </h2>
				<label class='form-title'> Gamme de prix:
					<p>
						<select name="prix_offre">
							<option value="0-10">0 à 10 €</option>
							<option value="10-30">10 à 30 €</option>
							<option value="30-60">30 à 60 €</option>
							<option value="60+">60 € et plus</option>
						</select>
					</p>
				</label>
				<div class='form-title'>Code Postal: 
				</div>
				<input class='form-field' type='text' name='code_postal' /><br />
				<div class='form-title'>Vendeur: 
				</div>
				<input class='form-field' type='text' name='idMembre' /><br />
				<div class='submit-container'>
				<input class='submit-button' id='submit-button-search' type='submit' value='rechercher' />				
				</div>

			</form>
		</div>
	</div>
	</body>
	
	<?php
		AnnonceRecherche();
	?>
</html> 