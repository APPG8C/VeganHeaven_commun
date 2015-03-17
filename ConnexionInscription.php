<!DOCTYPE html>
<html>
    <head>
		<?php 
		include("Entete.php");
		setPunchLine($Connexion_Inscription,true,$texte1="Inscription et Connexion",$texte2="Rejoignez-nous, vous êtes tous à croquer");
		setTitle($Connexion_Inscription,true,$texte="Rejoignez-nous");
		?>
    </head>
     <body>
        <div>
       <?php include("Menu.php");?>
        </div>
		<section>
		<table>
		<tr>
			<td>
			<form action="InformationMembres.php" method="POST">
			<legend><h2>Inscription</h2></legend>
				<label>Nom : <input type="text" name="NOM"/></label>				
				<label>Prénom : <input type="text" name="Prenom"/></label>			
				<label>Ville actuelle : <input type="text" name="VilleActuelle"/></label>
				<label>Adresse : <input type="string" name="Adresse"/></label>
				<label>Date de naissance : <input type="string" name="DateDeNaissance"/></label>
				<label>Téléphone mobile: <input type="int" name="TelephoneMobile"/></label>
				<label>Téléphone fixe: <input type="int" name="TelephoneFixe"/></label>
				<label>Adresse email: <input type="string" name="AdresseEmail"/></label>
				<label>Mot de passe : <input type="string" name="MotDePasse"/></label>
				<label>Confirmation du mot de passe : <input type="string" name="ConfirmationMDP"/></label>
			<p><input type="submit"class="controls"/></p>
			</form>
			</td>
			<td>
			<form class="connexion" action="InformationMembres.php" method="POST">
			<legend><h2>Connexion</h2></legend>
				<label>Email : <input type="string" name="email"/></label>
				<label>Mot de passe : <input type="string" name="MotdePasse"/></label>
				<p><input type="submit"class="controls"/></p>
			</form>
			</td>
		</tr>
		</table>
		</section>
		<?php include("PiedDePage.php");?>
     </body>

    </html>