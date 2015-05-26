<?php
	if(isset($_POST['ContenuMsgForum']) AND isset($_SESSION['ID']))
	{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$idMembre=$_SESSION['ID'];
	$membre=$_SESSION['member'];
	$ContenuMsgForum=$_POST['ContenuMsgForum'];

	if(isset($_GET['idTopic']) AND $ContenuMsgForum!=NULL)
	{
		$idTopic=$_GET['idTopic'];
		$request =$bdd->query("INSERT INTO `membre`.`MessageForum` (`idMessage`,`urlForum`,`idUsers`,`userMessage`,`ContenuMsgForum`,`datePost`) VALUES (
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
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$requete = $bdd->prepare("SELECT `ContenuMsgForum`,`datePost`,`userMessage` FROM MessageForum WHERE `urlForum`=? ORDER BY `datePost` ASC");
	$requete->execute(array($idTopic));
	
	while($reponse=$requete->fetch())
	{
		$username=$reponse['userMessage'];
		$ContenuMsgForum=$reponse['ContenuMsgForum'];
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