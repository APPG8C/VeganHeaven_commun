<?php
         $bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
         $request = $bdd->query("INSERT INTO `db578515750`.`annonces` (`idAnnonces`, `Members_idMembers`,`Annonceur`,`Transaction`,`prix_offre`,`lieu_transaction`,`departement`,`code_postal`, `Produit`,`Date`,`Description`,`Categorie`,`Url_Image`,`DatePublication`,`Quantite`,`Effectuee`) VALUES (
         NULL,
         '$iddb578515750',
         '$username',
         '$Transaction',
         '$prix_offre',
         '$lieu_transaction',
         '$departement',
         '$code_postal',
         '$Produit',
         '$Peremption',
         '$Description',
         '$Categorie',
         '$PhotoDeProduit',
         NOW(),
         '$Quantite',
         'FALSE');"); 
?>