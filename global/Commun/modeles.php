<?php
if(isset($_POST['user'])AND($_POST['pass'])){	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$membreConnecte=false;
if($user!=NULL AND $pass!=NULL)
{
	$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
	$requete=$bdd->prepare('SELECT`id`,`password` FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	$passh=$reponse['password'];
	$ID=$reponse['id'];
	if(password_verify($pass,$passh))
	{
	session_start();
	$membreConnecte=true;
	$_SESSION['member']=$user;
	$_SESSION['ID']=$ID;
	header("Location:../PageDeProfil.php");
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
}
?>
