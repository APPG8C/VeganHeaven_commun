<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
		<h1 id="titreCreationOffre">Création d'une offre</h1>
	</head>
	
	<body>
		<div class="creationOffre">
			<form method="post" action="donneesOffres.php">
				<legend><h2 class="titre_offre">type d'offre</h2></legend>
				<label> Type d'offre : <select name="categorie">
					<option value="vente">Vente</option>
					<option value="echange">Achat</option>
					
				</select>
				</label>

				<legend><h2 class="titre_offre">type de produit</h2></legend>
				<label> Catégorie: <select name="categorie">
					<option value="fruits">Fruits</option>
					<option value="légumes">Légumes</option>
					<option value="graines">Graines</option>
					<option value="autres">Autres</option>
				</select>
				</label>

				<legend><h2 class="titre_offre">Localisation</h2></legend>
				<label>Département : <input type="text" name="departement"/></label>
				<label>ville : <input type="text" name="ville"/></label>	
				<label>Code postal : <input type="text" name="code_postal"/></label>
				<label>Lieu de la transactions : <input type="text" name="lieu_transaction"/></label>

				<legend><h2 class="titre_offre">Informations personnelles</h2></legend>
				<label>Votre nom : <input type="text" name="username"/></label>
				<label>Email : <input type="text" name="AdresseEmail"/></label>
				<label>Téléphone : <input type="text" name="TelephoneMobile"/></label>

				<legend><h2 class="titre_offre">Votre Offre</h2></legend>
				<label>Titre : <input type="text" name="titre_offre"/></label>
				<label>texte (detail de l'offre) : <br/><textarea type="text" name="texte_offre"></textarea></label>
				<label>prix (euros) : <input type="text" name="prix_offre"/></label>







		</div>

	</body>	
</html>