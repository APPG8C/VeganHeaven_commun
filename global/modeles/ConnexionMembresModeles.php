<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
if($user!=NULL AND $pass!=NULL)
{
	$passh=crypt($pass);
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
	$requete=$bdd->prepare('SELECT`password`FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	$passh1=$reponse['password'];
	
	if($passh=$passh1)
	{
	session_start();
	header("Location:PageDeProfil.php");
	}
	else 
	{
		
	echo'Mot de passe ou identifiant invalide';
	}
}
else
{	
    echo'Veuillez remplir les deux champs';
}
?>