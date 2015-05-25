<?php
	
	if(isset($_POST['titreTopic']) AND isset($_SESSION['ID']))
	{
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$idMembre=$_SESSION['ID'];
	$titreTopic=$_POST['titreTopic'];

		
			$request =$bdd->query("INSERT INTO `membre`.`Topic` (`idTopic`,`titreTopic`,`datePost`,`idUsers`,`actif`) VALUES (
				NULL,
				'$titreTopic',
				NOW(),
				'$idMembre',
				TRUE);");
	}

	function CreationUrlTopic($actif)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$requete=$bdd->prepare('SELECT `idTopic`,`titreTopic` FROM Topic WHERE `actif`=?');
		$requete->execute(array($actif));
		while($reponse=$requete->fetch())
		{
			$idTopic=$reponse['idTopic'];
			$titreTopic=$reponse['titreTopic'];

			//echo"<a href='MessageForum.php?idTopic=".$idTopic."&amp;titreTopic=".$titreTopic."'>  $titreTopic </a> '";


		echo"<div id='divForum'>
		<span class='Topic'>
			<a href='MessageForum.php?idTopic=".$idTopic."&amp;titreTopic=".$titreTopic."'>  $titreTopic </a> 
		</span>
		<span id='dateDerniersMsg'>
			<p>Date du dernier message:</p>
		</span>
		</div>";
		}
	}



		/*$bdd=new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$requete=$bdd->query('SELECT `urlForum` FROM MessageForum'); 
		while($reponse=$requete->fetch()) 
		{
			$urlForum=$reponse['urlForum'];
		
		}
		
		$bdd=new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$requete=$bdd->prepare('SELECT `datePost`FROM MessageForum WHERE urlForum=?');
		$requete->execute(array($urlForum));
		while($reponse=$requete->fetch())
		{
			$datePost=$reponse['datePost'];
			echo"<span id='dateDerniersMsg'>
			<p>Date du dernier message: $datePost </p>
		</span>
		";
		}	

	}
	/*function DernierPost()
	{
		$bdd=new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$requete=$bdd->query('SELECT `urlForum` FROM MessageForum'); 
		while($reponse=$requete->fetch()) 
		{
			$urlForum=$reponse['urlForum'];
		
		}
		
		$bdd=new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$requete=$bdd->prepare('SELECT `datePost`FROM MessageForum WHERE urlForum=?');
		$requete->execute(array($urlForum));
		while($reponse=$requete->fetch())
		{
			$datePost=$reponse['datePost'];
			echo"<span id='dateDerniersMsg'>
			<p>Date du dernier message: $datePost </p>
		</span>
		";
		}	
	

	}*/
	
?>
