<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$membreConnecte=false;
if($user!=NULL AND $pass!=NULL)
{
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
	$requete=$bdd->prepare('SELECT`password`FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	$passh=$reponse['password'];

	if(password_verify($pass,$passh))
	{
	session_start();	
	$_SESSION['membre']=$user;
	$membreConnecte=true;
	}
}
?>
