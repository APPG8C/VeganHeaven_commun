<?php
	if(isset($_POST['ContenuMsgForum']) AND isset($_SESSION['ID']))
	{
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$idMembre=$_SESSION['ID'];
	$membre=$_SESSION['member'];
	$ContenuMsg=htmlspecialchars($_POST['ContenuMsgForum']);
	$ContenuMsgForum=addslashes($ContenuMsg);


		if(isset($_GET['idTopic']) AND $ContenuMsgForum!=NULL)
		{
		$idTopic=$_GET['idTopic'];
		$request =$bdd->query("INSERT INTO `db578515750`.`messageforum` (`idMessage`,`urlForum`,`idUsers`,`userMessage`,`ContenuMsgForum`,`datePost`) VALUES (
			NULL,
			'$idTopic',
			'$idMembre',
			'$membre',
			'$ContenuMsgForum',
			NOW());");
		}
	}

	function SelectIdMessage($idTopic,$titreTopic)
	{
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete = $bdd->prepare("SELECT `ContenuMsgForum`,`datePost`,`userMessage` FROM messageforum WHERE `urlForum`=? ORDER BY `datePost` ASC");
	$requete->execute(array($idTopic));
	
	while($reponse=$requete->fetch())
	{
		$username=$reponse['userMessage'];
		$ContenuMsg=$reponse['ContenuMsgForum'];
		$ContenuMsgForum=stripslashes($ContenuMsg);
		$datePost=$reponse['datePost'];
		
		echo"<div id='divGlobalPost'>
					<div id='divInfoMsg'>
						<p>
							<span class='Pseudo'>$username</span> </br>
							Sa note </br>
							nombre message
						</p>
					</div>
				<div id='dateDuPost'>
					<p> 
						<span class='topicMsg'>$titreTopic</span></br>
						posté le $datePost </br>
					</p>
				</div>
				<div id='divTextDroite'>
					<p>$ContenuMsgForum
					</p>
				</div>
			</div>";
	
	}
	}

?>