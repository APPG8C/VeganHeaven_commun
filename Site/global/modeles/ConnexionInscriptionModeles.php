
<?php

$bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
$request = $bdd->query("INSERT INTO `db578515750`.`users` (`id`, `username`, `password`,`Age`,`TelephoneMobile`,`TelephoneFixe`,`AdresseEmail`,`Adresse`,`Ville`,`PhotoDeProfil`,`DateInscription`) VALUES (
                NULL,
                '$username',
    			'$passwordh',
    			'$Age',
    			'$TelephoneMobile',
    			'$TelephoneFixe',
    			'$AdresseEmail',
                '$Adresse',
                '$Ville',
    			'$PhotoDeProfil',
                NOW());
                "); 
    				
?>