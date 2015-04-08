<!DOCTYPE html>
<html>
     <body>
		<section>
			<form action="InformationMembres.php" method="POST">
			<legend><h2>Inscription</h2></legend>
				<label>Pseudo: <input type="text" name="username"/></label>				
				<label>Adresse : <input type="text" name="Adresse"/></label>
				<label>Date de naissance : <input type="int" name="DateDeNaissance"/></label>
				<label>Téléphone mobile: <input type="int" name="TelephoneMobile"/></label>
				<label>Téléphone fixe: <input type="int" name="TelephoneFixe"/></label>
				<label>Adresse email: <input type="string" name="AdresseEmail"/></label>
				<label>Mot de passe: <input type="password" name="password"/></label>			
				<label>Confirmation Mot de passe : <input type="password" name="repeatpassword"/></label>
			<p><input type="submit"class="controls"/></p>
			</form>
		</section>
     </body>

    </html>