<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$req=$bdd->prepare('DELETE FROM `annonces` WHERE `idAnnonces`=?');
$req->execute(array($id));
?>