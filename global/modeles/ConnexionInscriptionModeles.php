
<?php

$bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
$request = $bdd->query("INSERT INTO `membre`.`users` (`id`, `username`, `password`,`Age`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`,`PhotoDeProfil`) VALUES (
                NULL,
                '$username',
    			'$passwordh',
    			'$Age',
    			'$TelephoneMobile',
    			'$TelephoneFixe',
    			'$AdresseEmail',
                '$Adresse',
    			'$PhotoDeProfil');
                "); 
    				
?>