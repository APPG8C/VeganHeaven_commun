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
	setTitle($texte="$user",$texte2="Vous êtes connecté");
	}
	else 
	{
	setTitle($texte="Oups",$texte2="Vous êtes sur ?");	
	echo'Mot de passe ou identifiant invalide';
	}
}
else
{	setTitle($texte="Oups",$texte2="Vous êtes sur ?");
    echo'Veuillez remplir les deux champs';
}
?>