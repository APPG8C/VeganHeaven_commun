<?php
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
	$req=$bdd->prepare('DELETE FROM `topic` WHERE `idTopic`=?');
	$req->execute(array($idTopic));
?>