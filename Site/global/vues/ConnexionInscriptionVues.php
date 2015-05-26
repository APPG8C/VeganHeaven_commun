<html>
	<table>
        <tr>
        	<td>
				<section>
						<form class="formLog" action="globalControleur.php?page=ConnexionInscription" method="POST"enctype="multipart/form-data">
							<legend><h2>Inscription</h2>*Obligatoire</legend>
							<label>Pseudo*: <input type="text" name="username"/></label>				
							<label>Adresse* : <input type="text" name="Adresse"/></label>
							<label>Ville* : <input type="text" name="Ville"/></label>
							<label>Age* : <input type="int" name="Age"/></label>
							<label>Téléphone mobile*: <input type="int" name="TelephoneMobile"/></label>
							<label>Téléphone fixe*: <input type="int" name="TelephoneFixe"/></label>
							<label>Adresse email*: <input type="string" name="AdresseEmail"/></label>
							<label>Mot de passe*: <input type="password" name="password"/></label>			
							<label>Confirmation Mot de passe*: <input type="password" name="repeatpassword"/></label>
							<label>Photo de profil :<input type="file" name="fichier"/></label>
							<p><input type="submit"class="submit-button"value="Valider"/></p>
						</form>
				</section>
            </td>
			<td>
				<article class="texteI">
				<legend><h2>Rejoingnez nous !!</h2></legend>
				<p>	Pourquoi s'inscrire sur Vegan Heaven ? Voyons ne vous posez plus cette question.
					Rejoindre la communauté la plus fruitée et vitaminée du web proche de chez vous change à tout jamais vôtre alimentation. Si, si croyez nous, vos repas seront meilleurs,
					et vous resplendirez de santé.<br/>Vous allez pouvoir comparez les annonces que nos membres publient quotidienement, et concoctez vos dessert et vos plats de la plus belle manière qui soit:
					avec le sourire ! Finit les produits pas frais, les membres s'engagent à échanger (ou acheter si necessaire) votre produit avec des légumes ou fruits provenant de leur jardin.
				</p>
				<p>					
					Vous avez compris ? Non, je ne crois pas, vous lisez encore ce texte au lieu de vous inscrire gratuitement... Allez, soyer des nôtres! On vous attend impatiement et on espère vite vous retrouver sur la communauté de VeganHeaven.
				</p>
				<p><img class='imageCerise' src='vues/images/Inscription.jpg' width="530px" height="260px"/></p>				
				</article>
				
			</td>
		</tr>
	</table>
</html>