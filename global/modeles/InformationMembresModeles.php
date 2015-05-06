
<?php
  $MembreInscrit=false;
  $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
  $username=$_POST['username'];
  $DateDeNaissance=$_POST['DateDeNaissance'];
  $TelephoneMobile=$_POST['TelephoneMobile'];
  $TelephoneFixe=$_POST['TelephoneFixe'];
  $AdresseEmail=$_POST['AdresseEmail'];
  $directory= 'vues/PhotoDeProfil/';
  $password1=$_POST['password'];
  $password2=$_POST['repeatpassword'];
  $PhotoDeProfil=$_FILES['fichier']['name'];
  $file=$_FILES["fichier"]["tmp_name"];
  $file=$_FILES["fichier"]["tmp_name"];
  
  if(filter_var($AdresseEmail, FILTER_VALIDATE_EMAIL))
  { 
    if(nomIdentique($username)==0)
    {
			if(($password1 === $password2))
			{
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
			
		} 
        //  echo '<p><a href='ConnexionInscription.php'>Le mot de passe et la confirmation du mot de passe diffèrent, veuillez ressaissir vos informations</a></p>';	
		  else
		{
          echo"Echec de validation du mot de passe";
		} 
  }
	
?>






