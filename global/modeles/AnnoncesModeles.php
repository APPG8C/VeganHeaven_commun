<?php
         $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
         $request = $bdd->query("INSERT INTO `membre`.`annonces` (`idAnnonces`, `Members_idMembers`,`Annonceur`,`Transaction`,`prix_offre`,`lieu_transaction`,`departement`,`code_postal`, `Produit`,`Date`,`Description`,`Categorie`,`Url_Image`,`DatePublication`,`Quantite`,`Effectuee`) VALUES (
         NULL,
         '$idMembre',
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