<?php
	include('MenuModeles.php');
	$user=$_POST['user'];
	$pass=$_POST['pass'];
if($user!=NULL AND $pass!=NULL)
{
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
	$requete=$bdd->prepare('SELECT`password`FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	if($pass==$reponse['password'])
	{
	session_start();
	$_SESSION['utilisateur'] = $MembreConnecté;
	header("Location:../PageDeProfil/PageDeProfil.php");
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