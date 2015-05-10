<?php
   
   $idMembre=$_SESSION['ID'];
   $username=$_SESSION['member'];
   $Vente_Echange=htmlspecialchars($_POST['Transaction']);
   $TypeProduit=htmlspecialchars($_POST['Categorie']);
   $Produit=htmlspecialchars($_POST['Produit']);
   $Peremption=htmlspecialchars($_POST['DatePeremption']);
   $Description=htmlspecialchars($_POST['Description']);
   $prix_offre=htmlspecialchars($_POST['prix_offre']);
   $lieu_transaction=htmlspecialchars($_POST['lieu_transaction']);
   $departement=htmlspecialchars($_POST['departement']);
   $code_postal=htmlspecialchars($_POST['code_postal']);
   $PhotoDeProduit=htmlspecialchars($_FILES['fichier']['name']);
   $file=htmlspecialchars($_FILES["fichier"]["tmp_name"]);
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
   if($Vente_Echange=='Demande')
   {
   $Transaction='Demande';
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
         $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
         $request = $bdd->query("INSERT INTO `membre`.`annonces` (`idAnnonces`, `Members_idMembers`,`Annonceur`,`Transaction`,`prix_offre`,`lieu_transaction`,`departement`,`code_postal`, `Produit`,`Date`,`Description`,`Categorie`,`Url_Image`,`DatePublication`,`Effectuee`) VALUES (
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
         'FALSE');"); 
          LoadPictures($file,$PhotoDeProduit,$directory);
 }
  
?>