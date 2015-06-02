<section>
		<form id="myForm" class="formLog" action='globalControleur.php?page=ModificationProfil' method="POST"enctype="multipart/form-data">
			<legend><h2>Modifications</h2></legend>
			<label>Pseudo:</label>
			<input type="text" name="username"/>				
			<label>Adresse:</label>
			<input type="text" name="Adresse"/>
			<label>Age:</label>
			<input type="int" name="Age"/>
			<label>Téléphone mobile:</label>
			<input type="int" name="TelephoneMobile"/>
			<label>Téléphone fixe:</label>
			<input type="int" name="TelephoneFixe"/>
			<label>Adresse email:</label>
			<input type="string" name="AdresseEmail"/>
			<div><input type="submit"class="submit-button"value="Valider"/></div>
			<a href="globalControleur.php?page=PageDeProfil">Retour à votre Profil</a>
		</form>
		
</section>