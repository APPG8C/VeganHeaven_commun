<?php
if (isset ($_GET["idAnnonces"]))
{
	$idAnnonces=$_GET["idAnnonces"] ;
	$Member=$_SESSION['ID'];
	if(memeAnnonce($idAnnonces,$Member)==0)
	{
		if ( isset ($_GET["idMember"]) AND isset ($_GET["Titre"]) AND isset ($_GET["Transaction"]) AND isset ($_GET["Peremtion"])
			AND isset ($_GET["prix_offre"]) AND isset ($_GET["lieu_transaction"]) AND isset ($_GET["DatePublication"]) AND isset ($_GET["TelephoneMobile"]) 
			AND isset ($_GET["TelephoneFixe"]) AND isset ($_GET["AdresseEmail"]) AND isset ($_GET["UrlImage"])){
		
			$idMember=$_SESSION['ID'];
			$Titre=$_GET["Titre"] ;
			$Transaction=$_GET["Transaction"] ;
			$Peremtion=$_GET["Peremtion"] ;
			$prix_offre=$_GET["prix_offre"] ;
			$lieu_transaction=$_GET["lieu_transaction"] ;
			$DatePublication=$_GET["DatePublication"];
			$TelephoneMobile=$_GET["TelephoneMobile"] ;
			$TelephoneFixe=$_GET["TelephoneFixe"];
			$AdresseEmail=$_GET["AdresseEmail"];
			$UrlImage=$_GET["UrlImage"];
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
			$request = $bdd->query("INSERT INTO `membre`.`panier` (`idPanier`, `idAnnonces`, `idMember`,`Titre`,`Transaction`,`prix_offre`,`Peremtion`,`DatePublication`,`lieu_transaction`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`,`UrlImage`) VALUES (
			NULL,
			'$idAnnonces',
			'$idMember',
			'$Titre',
			'$Transaction',
			'$prix_offre',
			'$Peremtion',
			'$DatePublication',
			'$lieu_transaction',
			'$TelephoneMobile',
			'$TelephoneFixe',
			'$AdresseEmail',
			'$UrlImage');"
						);
			$EmailBy=$_SESSION['Email'];
			$user=$_SESSION['member'];
			$text="Bonjour";
		    //AutomaticMail($user,$EmailBy,$AdresseEmail,$text,$Transaction,$Titre);
		}
	}
}
?>
<?php
	$Member=$_SESSION['ID'];
	$AnnonceSuppr=0;
	if(isset($_GET['suppr']))
	{
	$id=$_GET['suppr'];
    Suppr_AnnoncesPanier($id);
	}
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT * FROM panier WHERE `idMember`= ? GROUP BY `idPanier`');
	$requete->execute(array($Member));	
	echo"<h1 class='title'>Mon Panier</h1>";
	while($reponse=$requete->fetch()){
				
		$idAnnonces=$reponse["idAnnonces"] ;
		$Titre=$reponse["Titre"] ;
		$Transaction=$reponse["Transaction"] ;
		$Peremtion=$reponse["Peremtion"] ;
		$prix_offre=$reponse["prix_offre"] ;
		$lieu_transaction=$reponse["lieu_transaction"] ;
		$DatePublication=$reponse["DatePublication"];
		$TelephoneMobile=$reponse["TelephoneMobile"] ;
		$TelephoneFixe=$reponse["TelephoneFixe"];
		$AdresseEmail=$reponse["AdresseEmail"];
		$UrlImage=$reponse["UrlImage"];
		$Statut_Annonces=Statut_Annonces($idAnnonces);	
			if($Statut_Annonces==0)
			{
			$valide='Non effectuée';
			}
			else
			{
			$valide='Effectuée';
			}
		echo"
		<div class='panier'>
		<table>
				<tr>
					<td>
						<div class='plusloin1'>
						<h3><strong>$Transaction:</strong> $Titre<br/><strong>Adresse:</strong> $lieu_transaction</h3>
						</div>
					</td>
					<td>
						<div class='inforCompte'>
							<p class='suppr'>
								<a href='MonCompte.php?suppr=".$idAnnonces."'><button class='submit-button'>Effacer</button></a>
							</p>
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
										<div class='inforCompte'>
										<h4>Statut:</h4>
										$valide
										</div>
									</div>
								</td>
								<td>
									<div class='inforCompte'>
									<h4>Téléphone Mobile:</h4>
								    $TelephoneMobile
									</div>
								</td>
								<td>
									<div class='inforCompte'>
									<h4>Téléphone Fixe:</h4>
								    $TelephoneFixe
									</div>
								</td>
								<td>
									<div class='inforCompte'>
									<h4 >Prix:</h4>
									$prix_offre euro(s)
									<div>
								</td>
								<td>
								</td>
							</tr>
						</table>
						<div class='plusloin2'>
								<a href='Produits.php?variable=".$Titre."'><img class='image' src='vues/PhotoDeProduit/$UrlImage' width=350px height=250px /></a>	
						</div>
						<div>
						<table>
							<tr>
								<td>
									<div class='inforDate'>
										<h4>Date de publication:</h4>$AdresseEmail<br/>
									<div>
								</td>		
							</tr>
							<tr>
								<td>
									<div class='inforCompte'>
										<h4>Date de peremption:</h4>$Peremtion
									<div>
								</td>		
							</tr>
						</table>
						</div>
					</div>
					</td>
					
				</tr>
		</table>
		</div>";
	}
?>

