<section>
		<form class="formLog" action='ModificationProfil.php?' method="POST"enctype="multipart/form-data">
			<legend><h2>Modifications</h2></legend>
			<label>Pseudo: <input type="text" name="username"/></label>				
			<label>Adresse: <input type="text" name="Adresse"/></label>
			<label>Date de naissance: <input type="int" name="DateDeNaissance"/></label>
			<label>Téléphone mobile: <input type="int" name="TelephoneMobile"/></label>
			<label>Téléphone fixe: <input type="int" name="TelephoneFixe"/></label>
			<label>Adresse email: <input type="string" name="AdresseEmail"/></label>
			<p><input type="submit"class="submit-button"value="Valider"/></p>
		</form>
		<a href="PageDeProfil.php">Retour à votre Profil</a>
</section>