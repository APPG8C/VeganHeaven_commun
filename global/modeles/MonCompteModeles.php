<?php
if (isset ($_GET["idAnnonces"]))
{
	$idAnnonces=$_GET["idAnnonces"] ;
	$Member=$_SESSION['ID'];
	if(memeAnnonce($idAnnonces,$Member)==0)
	{
		if ( isset ($_GET["idMember"]) AND isset ($_GET["Titre"]) AND isset ($_GET["Transaction"]) AND isset ($_GET["Peremtion"])
			AND isset ($_GET["prix_offre"]) AND isset ($_GET["lieu_transaction"]) AND isset ($_GET["DatePublication"]) AND isset ($_GET["TelephoneMobile"]) 
			AND isset ($_GET["TelephoneFixe"]) AND isset ($_GET["AdresseEmail"])){
		
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
			$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
			$request = $bdd->query("INSERT INTO `membre`.`panier` (`idPanier`, `idAnnonces`, `idMember`,`Titre`,`Transaction`,`prix_offre`,`Peremtion`,`DatePublication`,`lieu_transaction`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`) VALUES (
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
			'$AdresseEmail');"
						);
			$EmailBy=$_SESSION['Email'];
			$user=$_SESSION['member'];
			$text="Bonjour";
		    AutomaticMail($user,$EmailBy,$AdresseEmail,$text,$Transaction,$Titre);
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
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT * FROM panier WHERE `idMember`= ? GROUP BY `idPanier`');
	$requete->execute(array($Member));
	echo"<body>
		<h1 class='titles'>Mon Panier</h1>
	 		<div class='TabTransactions' >
                <table >
                    <tr>
                        <td>
                        Annonce
                        </td>
                        <td >
                        Transaction
                        </td>
                        <td>
                        Prix en cas de vente
                        </td>
						<td>
                        Adresse
                        </td>
						<td>
                        Téléphone
                        </td>
						<td>
                        Email
                        </td>
                        <td>
                       	Date de publication
                        </td>
                        <td>
                        Statut
                        </td>
                        <td>
                        Supprimer
                        </td>
                    </tr>";
    
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
				$Statut_Annonces=Statut_Annonces($idAnnonces);	
					if($Statut_Annonces==0)
					{
					$valide='Non effectuée';
					}
					else
					{
					$valide='Effectuée';
					}
				echo"<tr>
                        <td >
                          <a href='Produits.php?variable=".$Titre."'>$Titre</a><br />
                        </td>
                        <td>
                           $Transaction
                        </td>
                        <td>
                            $prix_offre
                        </td>
						<td>
                            $lieu_transaction
                        </td>
						<td>
							<p>
                            	Mobile:$TelephoneMobile
                           		<br/>
                           		Fixe:$TelephoneFixe
                           	</p>
                        </td>
						<td>
                            $AdresseEmail
                        </td>
                        <td>
                            $DatePublication
                        </td>
                        <td>
                        $valide
                        </td>
                        <td>
                        <a href='MonCompte.php?suppr=".$idAnnonces."'><button class='submit-button'>Effacer</button></a>";
                        echo"</td>
                    </tr>";
				
			}
	
			echo"</table>
            </div>
     </body>";
?>


	