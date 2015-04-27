<?php
   $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','cedbos456');
   $idMembre=$_SESSION['ID'];
   $Vente_Echange=$_POST['Transaction'];
   $TypeProduit=$_POST['Categorie'];
   $Produit=$_POST['Produit'];
   $Peremption=$_POST['DatePeremption'];
   $Description=$_POST['Description'];
   $prix_offre=$_POST['prix_offre'];
   $lieu_transaction=$_POST['lieu_transaction'];
   $departement=$_POST['departement'];
   $code_postal=$_POST['code_postal'];
   $PhotoDeProduit=$_FILES['fichier']['name'];
   $file=$_FILES["fichier"]["tmp_name"];
   $directory= 'vues/PhotoDeProduit/';
 if(isset($Vente_Echange) AND isset($TypeProduit)){
  if($Vente_Echange=='Vente')
   {
   $Transaction='Vente'; 
   }
  if($Vente_Echange=='Echange')
   {
   $Transaction='Echange';
   }
   if($TypeProduit=='fruits'){
   $Categorie='fruit';
   }
   if($TypeProduit=='legumes'){
   $Categorie='legume';
   }
   if($TypeProduit=='graines')
   {
   $Categorie='graine';
   }
   if($TypeProduit=='autres')
   {
   $Categorie='autre';
   }
}

    if(isset($Produit) AND isset($Peremption) AND isset($Description) AND isset($Categorie) AND isset($Transaction))
  {
         $request = $bdd->query("INSERT INTO `membre`.`annonces` (`idAnnonces`, `Members_idMembers`,`Transaction`,`prix_offre`,`lieu_transaction`,`departement`,`code_postal`, `Produit`,`Date`,`Description`,`Categorie`,`Url_Image`,`DatePublication`,`Effectuee`) VALUES (
         NULL,
         '$idMembre',
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
         'FALSE');"); 
       LoadPictures($file,$PhotoDeProduit,$directory);
 }
  
?>