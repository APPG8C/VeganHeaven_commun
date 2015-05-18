
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
$request = $bdd->query("INSERT INTO `membre`.`users` (`id`, `username`, `password`,`Age`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`,`Adresse`,`Ville`,`PhotoDeProfil`) VALUES (
                NULL,
                '$username',
    			'$passwordh',
    			'$Age',
    			'$TelephoneMobile',
    			'$TelephoneFixe',
    			'$AdresseEmail',
                '$Adresse',
                '$Ville',
    			'$PhotoDeProfil');
                "); 
    				
?>