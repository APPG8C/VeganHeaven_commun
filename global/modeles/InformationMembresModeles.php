
<?php
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
			$passwordh=crypt($password1); 
			$request = $bdd->query("INSERT INTO `membre`.`users` (`id`, `username`, `password`,`DateDeNaissance`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`) VALUES (
			NULL,
			'$username',
			'$passwordh',
			'$DateDeNaissance',
			'$TelephoneMobile',
			'$TelephoneFixe',
			'$AdresseEmail');"); 
			echo"Bonjour et Bienvenue $username votre compte est bien enregistré";
		 }
          
        //  echo '<p><a href='ConnexionInscription.php'>Le mot de passe et la confirmation du mot de passe diffèrent, veuillez ressaissir vos informations</a></p>';
			
		  else
		{
          echo"Echec de validation du mot de passe";
		} 
      }
	
	
?>
