<?php
function trueAnnonce($champ,$donnee)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT `$champ` FROM annonces WHERE `$champ`=?");
$requete->execute(array($donnee));
$reponse=$requete->fetch();
$resultat=$reponse[$champ];
return $resultat;
}
?>
<?php
function Annonces($champ,$donnee,$effectuee){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT * FROM annonces WHERE $champ=? AND `Effectuee`= ? ORDER BY `DatePublication` LIMIT 20");
$requete->execute(array($donnee,$effectuee));

while($reponse=$requete->fetch()) 
{
	$idAnnonces=$reponse['idAnnonces'];
	$Produit=$reponse['Produit'];
	$Annonceur=$reponse['Annonceur'];
	$Description=$reponse['Description'];
	$transaction=$reponse['Transaction'];
	$lieu_transaction=$reponse['lieu_transaction'];
	$prix_offre=$reponse['prix_offre'];
	$peremption=$reponse['Date'];
	$DatePubli=$reponse['DatePublication'];


	echo"
		<div class='separation'>
		<table>
		<tr>
			<td>
				<div class='plusloin1'>
				<h3>Annonce publié par $Annonceur à réaliser au $lieu_transaction:</h3>
				</div>
			</td>
		</tr>

		<tr>
			<td>
			<div class='pack'>
			<table>
					<tr>
						<td>
							<div class='plusloin1'>
								<div class='infor'>
								<h4>Transaction:</h4>
								$transaction
								</div>
							</div>
						</td>
						<td>
							<div class='infor'>
							<h4>Produit:</h4>
							$Produit
							</div>
						</td>
						<td>
							<div class='infor'>
							<h4 >Prix:</h4>
							$prix_offre euro(s)
							<div>
						</td>
						<td>
							<div class='infor'>
								<p class='suppr'>
									<a href='GererAnnonces.php?SupprProduit=".$Produit."&amp;SupprId=".$idAnnonces."'><button class='submit-button'>Supprimer</button>
									</a>
								</p>
							<div>
						</td>
						<td>
						<table>
								<tr>
									<td>
									<div class='inforDate'>
									<h4>Date de publication:</h4>$DatePubli<br/>
									<div>
									</td>		
								</tr>
								<tr>
									<td>
									<div class='infor'>
									<h4>Date de peremption:</h4>$peremption
									<div>
									</td>		
								</tr>
						</table>
						</td>
					</tr>
				</table>
				<div class='plusloin2'>
				<h4>Description:</h4>
						<p class='description' width='50px'>
						$Description<br/>
						</p>
				</div>
			</div>
			</td>
		</tr>
	</table>
	</div>";
	}
}

?>
<?php
function trueMember($champ,$donnee)
{
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT `username` FROM users WHERE `$champ`=?");
$requete->execute(array($donnee));
$reponse=$requete->fetch();
$username=$reponse['username'];
if($champ=='id'){
return $username;
}
if($champ=='username' AND $username==$donnee)
{
return TRUE;
}
}
?>

<?php
function Membre($champ,$donnee){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT * FROM users WHERE `$champ`=? ORDER BY `DateInscription`");
$requete->execute(array($donnee));
while($reponse=$requete->fetch()) 
{
	$id=$reponse['id'];
	$username=$reponse['username'];
	$Age=$reponse['Age'];
	$TelephoneFixe=$reponse['TelephoneFixe'];
	$TelephoneMobile=$reponse['TelephoneMobile'];
	$AdresseEmail=$reponse['AdresseEmail'];
	$Adresse=$reponse['Adresse'];
	$Ville=$reponse['Ville'];
	$DateInscription=$reponse['DateInscription'];

	echo"<div class='separation'>
				<table>
				<tr>
					<td>
						<div class='plusloin1'>
						<h3> $username inscrit le $DateInscription</h3>
						</div>
					</td>
				</tr>

				<tr>
					<td>
					<div class='pack'>
					<table>
							<tr>
								<td>
									<div class='plusloin1'>
										<div class='infor'>
										<h4>Email</h4>
										$AdresseEmail
										</div>
									</div>
								</td>
								<td>
									<div class='infor'>
									<h4> Telephone fixe:</h4>
									$TelephoneFixe
									</div>
								</td>
								<td>
									<div class='infor'>
									<h4 >Telephone mobile</h4>
									$TelephoneMobile
									<div>
								</td>
								<td>
									<div class='infor'>
											<h4>Adresse:</h4>
											<div >
											$Adresse
											</div>
											</a>
									<div>
								</td>
								<td>
								<table>
										<tr>
											<td>
											<div class='inforDate'>
											<h4>Ville:</h4>$Ville<br/>
											<div>
											</td>		
										</tr>
										<tr>
											<td>
											<div class='infor'>
											<h4>Age:</h4>$Age ans
											<div>
											</td>		
										</tr>
								</table>
								</td>
							</tr>
						</table>
						<div class='plusloin2'>
							<a href='GererMembre.php?SupprUser=".$username."&amp;SupprId=".$id."'><button class='submit-button'>Bannir</button></a>
						</div>
					</div>
					</td>
				</tr>
			</table>
			</div>";
}
}
?>
<?php
function Defil($champ,$table,$condition,$donnee){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete = $bdd->prepare("SELECT `$champ` FROM $table WHERE `$condition`= ? GROUP BY `$champ`");
$requete->execute(array($donnee));

echo"<p><select name=Recherche$champ>
	<option value=''>$champ :</option>";
while($reponse=$requete->fetch())
{
$resultat=$reponse[$champ];
echo"<option value='$resultat'>$resultat</option>";
}
echo"</select></p>
<input  type='submit' value='Chercher un(e) $champ'/>";
}
?>

