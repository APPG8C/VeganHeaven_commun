<?php

		$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
		$req=$bdd->prepare('DELETE FROM `users` WHERE `username`=?');
		$req->execute(array($user));
	
?>