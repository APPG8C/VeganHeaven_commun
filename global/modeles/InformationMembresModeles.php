<?php
function nomIdentique($utilisateur)
{
$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
$requete=$bdd->prepare('SELECT`username`FROM users WHERE`username`= ?');
$requete->execute(array($utilisateur));	
$reponse=$requete->fetch();
$USER=$reponse['username'];
	if(isset($USER))
	{
	return 1;	
	}
	else{
	return 0;
	}
}
?>
<?php
   $MembreInscrit=false;
   $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','');
   $username=$_POST['username'];
   $password1=$_POST['password'];
   $password2=$_POST['repeatpassword'];
   $DateDeNaissance=$_POST['DateDeNaissance'];
   $TelephoneMobile=$_POST['TelephoneMobile'];
   $TelephoneFixe=$_POST['TelephoneFixe'];
   $AdresseEmail=$_POST['AdresseEmail'];
  
       if(filter_var($AdresseEmail, FILTER_VALIDATE_EMAIL))
       {
		  
        if(($password1 === $password2))
          {
			  if(nomIdentique($username)==0)
			  {
			$passwordh=password_hash($password1,PASSWORD_BCRYPT); 
			$request = $bdd->query("INSERT INTO `membre`.`users` (`id`, `username`, `password`,`DateDeNaissance`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`) VALUES (
			NULL,
			'$username',
			'$passwordh',
			'$DateDeNaissance',
			'$TelephoneMobile',
			'$TelephoneFixe',
			'$AdresseEmail');"); 
			$MembreInscrit=true;
				  
			  }
			
		 }
          
        //  echo '<p><a href='ConnexionInscription.php'>Le mot de passe et la confirmation du mot de passe diffèrent, veuillez ressaissir vos informations</a></p>';
			
		  else
		{
          echo"Echec de validation du mot de passe";
		} 
      }
	
	
?>


