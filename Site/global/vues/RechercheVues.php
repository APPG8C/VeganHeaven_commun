<div id='divOffre'>
<h2 id='recherche-titre'> Recherche avancée:</h2>
<form action="globalControleur.php?Transaction='.$Transaction.'&amp;Categorie='.$Categorie.'&amp;Produit='.$Produit.'&amp;Date='.$Date.'&amp;prix_offre='.$prix_offre.'
&amp;code_postal='.$code_postal.'&amp;Annonceur='.$Annonceur.'&amp;Quantite='.$Quantite.'">
<div class="tableRecherche">	
	<table>
		<legend ><h2 id='recherche-titre'>Détails:</h2></legend>
		<tr>
			<td>
				<div id="MenuCentre">
				 <label class='form-title'>Transaction:</label>
					<select name="Transaction">
						<option value=''>Transaction:</option>
						<option value="Vente">Vente</option>
						<option value="Echange">Echange</option>
						<option value="Demande">Demande</option>
					</select>
						
				
				<label class='form-title'>Type:</label>
					<select name="Categorie">
						<option value=''>Categorie:</option>
						<option value="fruit">Fruit</option>
						<option value="legumes">Légumes</option>
						<option value="graines">Graines</option>
						<option value="autres">Autres</option>
					</select>

				<label class='form-title'>Produit: </label>
					<?php
					Recherche(0,"Produit");
					?>
				</div>
				</td>
				<td>
				<div id="MenuCentre">
					 
						<label class='form-title'>Quantité: (g) </label>
						<?php
						Recherche(0,"Quantite");
						?>
						<label class='form-title'>Membres: </label>
						<?php
						Recherche(0,"Annonceur");
						?>
						<label class='form-title'>Péremption: </label>
						<?php
						Recherche(0,"Date");
						?>
				</div>	
				</td>
				<td>
					<img src="vues/images/FondCerise.jpg " width=50% height=17% />	
				</td>	
			</tr>
			<tr>
				<td>
				
				<div class='submit-container'>
					<input class="submit-button" type="submit" value="Recherche">
					<input type="hidden" id="token" name="page" value="Recherche" method="get">				
				</div>
				
				</td>
			</tr>	
	</table>
</div>
</form>
</div>
