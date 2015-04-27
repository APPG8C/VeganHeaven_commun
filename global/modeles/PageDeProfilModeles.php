<?php
   if(isset($_SESSION['member'])){
   $member=$_SESSION['member'];
   $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
   $requete=$bdd->prepare('SELECT * FROM users WHERE`username`=?');
   $requete->execute(array($member));
   $reponse=$requete->fetch();
   
   $username=$reponse['username'];
   $DateDeNaissance=$reponse['DateDeNaissance'];
   $TelephoneMobile=$reponse['TelephoneMobile'];
   $TelephoneFixe=$reponse['TelephoneFixe'];
   $AdresseEmail=$reponse['AdresseEmail'];
   $photo=$reponse['PhotoDeProfil'];
   }
?>
