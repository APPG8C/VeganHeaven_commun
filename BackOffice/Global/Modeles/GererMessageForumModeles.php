
<?php
$idTopic=$_GET['IdTopic'];
$titreTopic=$_GET['titreTopic'];
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$requete=$bdd->prepare('SELECT * FROM `messageforum` WHERE `urlForum`=?');
$requete->execute(array($idTopic));
echo"<div class='plusloin1'><h3> Titre du Topic: $titreTopic</h3></div>";
while($reponse=$requete->fetch())
{
$idMessage=$reponse['idMessage'];
$userMessage=$reponse['userMessage'];
$ContenuMsgForum=$reponse['ContenuMsgForum'];	
$datePost=$reponse['datePost'];

echo"<div class='separation'>
			<table>
				<tr>
					<td>
					<div >
						<table>
							<tr>
								<td>
									<div class='inforMessage'>
									<h4 >Création du Message:</h4>
									$datePost
									<div>
								</td>
								<td>
									<div class='inforMessage'>
									<h4> Nom du créateur du Message:</h4>
									 $userMessage
									</div>
								</td>
								<td>
									<div class='inforMessage'>
									<h4>Message:</h4>
									<div class='message'>$ContenuMsgForum</div>
									<div>
								</td>
								<td>
								<a href='Administration.php?page=GererMessageForum&amp;SupprMessage=".$idMessage."&amp;IdTopic=".$idTopic."&amp;titreTopic=".$titreTopic."'><button class='submit-button'>Supprimer</button></a>
								</td>
							</tr>
						</table>	
					</div>
					</td>
				</tr>
			</table>
			</div>";
}
?>
