
<?php

  $MembreInscrit=false;
  $NbChars=6;
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
  $username=htmlspecialchars($_POST['username']);
  $DateDeNaissance=htmlspecialchars($_POST['DateDeNaissance']);
  $TelephoneMobile=htmlspecialchars($_POST['TelephoneMobile']);
  $TelephoneFixe=htmlspecialchars($_POST['TelephoneFixe']);
  $AdresseEmail=htmlspecialchars($_POST['AdresseEmail']);
  $password1=htmlspecialchars($_POST['password']);
  $password2=htmlspecialchars($_POST['repeatpassword']);
  $PhotoDeProfil=htmlspecialchars($_FILES['fichier']['name']);
  $file=htmlspecialchars($_FILES["fichier"]["tmp_name"]);
  $directory= 'vues/PhotoDeProfil/';

  if(filter_var($AdresseEmail, FILTER_VALIDATE_EMAIL)!== false)
  { 
    if(nomIdentique($username)==0)
    {
		if(($password1 === $password2))
		{
			if($password1>=$NbChars){
			$passwordh=password_hash($password1,PASSWORD_BCRYPT); 
			$request = $bdd->query("INSERT INTO `membre`.`users` (`id`, `username`, `password`,`DateDeNaissance`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`,`PhotoDeProfil`) VALUES (
			NULL,
			'$username',
			'$passwordh',
			'$DateDeNaissance',
			'$TelephoneMobile',
			'$TelephoneFixe',
			'$AdresseEmail',
			'$PhotoDeProfil');"); 
			$MembreInscrit=true;
			LoadPictures($file,$PhotoDeProfil,$directory);
			echo"Félicitation, vous voila maintenant inscrit comme membre de VeganHeaven,veuillez vous connecter pour commencer vos échanges";
			}
			else
			{
			echo"Votre mot de passe est trop court, il doit contenir minimum 6 caractères";
			}
		}	
		else
		{
        echo"Echec de validation du mot de passe";
		} 	
	} 
	else
	{
    echo"Cet identifiant est déja utilisé, veuillez en choisir un autre";
	}   
}
else
{
echo"Une erreur est survenue, l'adresse mail n'est pas valide";
} 
	
?>






