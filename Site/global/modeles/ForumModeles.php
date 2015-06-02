<?php
	if(isset($_POST['titreTopic']) AND isset($_SESSION['ID']))
	{
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$idMembre=$_SESSION['ID'];
	$titreTopic=htmlspecialchars($_POST['titreTopic']);

		
			$request =$bdd->query("INSERT INTO `db578515750`.`topic` (`idTopic`,`titreTopic`,`datePost`,`idUsers`,`actif`) VALUES (
				NULL,
				'$titreTopic',
				NOW(),
				'$idMembre',
				TRUE);");
	}

	function CreationUrlTopic($actif)
	{
		$bdd=new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
		$requete=$bdd->prepare('SELECT `idTopic`,`titreTopic` FROM topic WHERE `actif`=?');
		$requete->execute(array($actif));
		while($reponse=$requete->fetch())
		{
			$idTopic=$reponse['idTopic'];
			$titreTopic=$reponse['titreTopic'];

		echo"<div id='divForum'>
		<span class='Topic'>
			<a href='globalControleur.php?page=MessageForum&amp;idTopic=".$idTopic."&amp;titreTopic=".$titreTopic."'>  $titreTopic </a> 
		</span>
		<span id='dateDerniersMsg'>
			<p>Date du dernier message:</p>
		</span>
		</div>";
		}
	}
?>