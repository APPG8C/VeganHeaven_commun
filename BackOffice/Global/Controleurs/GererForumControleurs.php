<?php
include('Vues/GererForumVues.php');
	
	//Annonces('Effectuee',0,0);
	if(isset ($_GET["SupprTopic"]) AND isset ($_GET["SupprIdTopic"]))
	{
		$titreTopic=$_GET["SupprTopic"];
		$idTopic=$_GET["SupprIdTopic"];
		//$trueTopic=trueTopic($titreTopic);
		//if($trueTopic==)*/
		if(isset($titreTopic) AND isset($idTopic))
		{
		trueTopic(1);
		include('Modeles/GererForumModeles.php');
		}
	}
	Topic(1);
?>