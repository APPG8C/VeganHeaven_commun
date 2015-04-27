<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
		<h1 id="titreCreationOffre">Création d'une offre</h1>
	</head>
	
	<body>
		<div class="creationOffre">
			<form class="formOffre" action="Annonces.php" method="POST"enctype="multipart/form-data">
				<table>
					<tr>
						<td>
							<legend><h2 class="Transaction">Type d'offre</h2></legend>
								<label> Vente/Echange: 
									<p>
									<select name="Transaction">
										<option value="Vente">Vente</option>
										<option value="Echange">Echange</option>
									</select>
									</p>
								</label>
							<legend><h2 class="Offre">Votre Offre</h2></legend>
								<label>Nom du produit: <input type="text" name="Produit"/></label>
								<label>Detail de l'offre: <br/><textarea type="longtext" name="Description"></textarea></label>
								<label>Date péremption*: <input type="date" name="DatePeremption"/></label>
								<label>Prix (euros) : <br/><input type="text" name="prix_offre"/></label>
								<label>Photo du produit :<input type="file" name="fichier"/></label>
						</td>
						<td>
							<legend><h2 class="Categorie">Type de produit</h2></legend>
											<label> Catégorie: 
											<p>
											<select name="Categorie">
												<option value="fruits">Fruits</option>
												<option value="legumes">Légumes</option>
												<option value="graines">Graines</option>
												<option value="autres">Autres</option>
											</select>
											</p>
											</label>
							<legend><h2 class="localisation">Lieux de l'échange</h2></legend>
								<label>Département : <input type="text" name="departement"/></label>
								<label>ville : <input type="text" name="ville"/></label>	
								<label>Code postal : <input type="text" name="code_postal"/></label>
								<label>Adresse : <input type="text" name="lieu_transaction"/></label>
								<p><input type="submit"class="submit-button"value="Valider"/></p>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>	
</html>