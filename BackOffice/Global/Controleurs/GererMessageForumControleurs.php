<?php
include('Vues/GererMessageForumVues.php');
$id=$_GET["IdTopic"];
if(isset ($_GET["IdTopic"]) AND isset ($_GET["titreTopic"]))
{
	if(isset ($_GET["SupprMessage"]))
	{
		$id=htmlspecialchars($_GET["SupprMessage"]);
		effacerMessage($id);
	}
	include('Modeles/GererMessageForumModeles.php');
}

?>