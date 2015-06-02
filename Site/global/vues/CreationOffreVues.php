<div class="creationOffre">
	<h1 id="titreCreationOffre">Création d'une annonce</h1>
	<form class="formOffre" action="globalControleur.php?page=Annonces" method="POST"enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<legend><h2 class="Transaction">Type de produit</h2></legend>
						
						<label> Catégorie:</label>
							<select name="Categorie">
								<option value="fruits">Fruits</option>
								<option value="legumes">Légumes</option>
								<option value="graines">Graines</option>
								<option value="autres">Autres</option>
							</select>
									
									
					<legend><h2 class="Offre">Votre Offre</h2></legend>
						<label>Nom du produit:</label> 
						<input type="text" name="Produit"/>
						<label>Detail:</label>
						<textarea type="longtext" name="Description"/></textarea>
						<label>Date péremption*:</label> 
						<input type="date" name="DatePeremption"/></label>
						<label>Quantité:(en grammes)</label>
						<input type="text" name="Quantite"/>
						<label>Photo du produit:</label>
						<input type="file" name="fichier"/><br/>
						En cas de demande, ce sera une photo du produit espéré
				</td>
				<td>
					<div>
					<legend><h2 class="Categorie">Type de transaction</h2></legend>
						<label> Vente/Echange/Demande:</label> 
							<div>
								<select name="Transaction">
									<option value="Vente">Vente</option>
									<option value="Echange">Echange</option>
									<option value="Demande">Demande</option>
								</select>
							</div>
						
						<label>Prix (euros) :</label>
						<input type="text" name="prix_offre"/>
						<legend><h2 class="Categorie">Lieux de l'échange</h2></legend>
						<label>Département :</label>
						<input type="text" name="departement"/>
						<label>Ville :</label><input type="text" name="ville"/>	
						<label>Code postal :</label> 
						<input type="text" name="code_postal"/>
						<label>Adresse :</label>
						<input type="text" name="lieu_transaction"/>
						<p><input type="submit"class="submit-button"value="Valider"/></p>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
