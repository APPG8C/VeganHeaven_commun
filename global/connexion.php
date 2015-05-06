<?php
if(!isset($_SESSION['membre'])){
	if(isset($_POST['user']) AND isset($_POST['pass'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$membreConnecte=false;
		if($user!=NULL AND $pass!=NULL)
		{
		$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
		$requete=$bdd->prepare('SELECT`id`,`password` FROM users WHERE`username`=?');
		$requete->execute(array($user));
		$reponse=$requete->fetch();
		$passh=$reponse['password'];
		

				if(password_verify($pass,$passh))
				{
					
					$_SESSION['membre']=$user;
					$_SESSION['ID']=$ID;
					$membreConnecte=true;
				}
		}
	}
}
?>

