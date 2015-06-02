<?php
$membreConnecte=false;
$MauvaisMotdePasse=false;
$ChampsVide=false;

if(isset($_POST['user'])AND isset($_POST['pass'])){	
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if($user!=NULL AND $pass!=NULL)
	{
	$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
	$requete=$bdd->prepare('SELECT`id`,`password`,`AdresseEmail` FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	$passh=$reponse['password'];
	$ID=$reponse['id'];
	$AdresseEmail=$reponse['AdresseEmail'];
		if(password_verify($pass,$passh))
		{
		$membreConnecte=true;
		$_SESSION['member']=$user;
		$_SESSION['ID']=$ID;
		$_SESSION['Email']=$AdresseEmail;
		}
		if(password_verify($pass,$passh)==false)
		{
		$MauvaisMotdePasse=true;
		}
		else
		{
		$ChampsVide=true;
		}
	}
}

?>

