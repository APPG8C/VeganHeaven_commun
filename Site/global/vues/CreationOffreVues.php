<body>
<div class="creationOffre">
	<h1 id="titreCreationOffre">Création d'une annonce</h1>
	<form class="formOffre" action="globalControleur.php?page=Annonces" method="POST"enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<legend><h2 class="Transaction">Type de produit</h2></legend>
						
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
					<legend><h2 class="Offre">Votre Offre</h2></legend>
						<label>Nom du produit: <input type="text" name="Produit"/></label>
						<label>Detail:<br/><textarea type="longtext" name="Description"/></textarea></label>
						<label>Date péremption*: <input type="date" name="DatePeremption"/></label>
						<label>Quantité: <br/><input type="text" name="Quantite"/></label>
						<label>Photo du produit:<input type="file" name="fichier"/><br/>En cas de demande, ce sera une photo du produit espéré</label>
				</td>
				<td>
					<legend><h2 class="Categorie">Type de transaction</h2></legend>
						<label> Vente/Echange/Demande: 
							<p>
							<select name="Transaction">
								<option value="Vente">Vente</option>
								<option value="Echange">Echange</option>
								<option value="Demande">Demande</option>
							</select>
							</p>
						</label>
						<label>Prix (euros) : <br/><input type="text" name="prix_offre"/></label>
									
					<legend><h2 class="Categorie">Lieux de l'échange</h2></legend>
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
