<?php
   $idMembre=$_SESSION['ID'];
   $username=$_SESSION['member'];
if(isset($_POST['Transaction']) AND isset($_POST['Categorie']) AND isset($_POST['Produit']) AND isset($_POST['DatePeremption']) AND isset($_POST['Description'])
AND isset($_POST['prix_offre']) AND isset($_POST['lieu_transaction']) AND isset($_POST['Quantite']) AND isset($_POST['departement']) AND isset($_POST['code_postal']) 
AND isset($_FILES['fichier']['name']) AND isset($_FILES["fichier"]["tmp_name"])){

   $Vente_Echange=htmlspecialchars($_POST['Transaction']);
   $TypeProduit=htmlspecialchars($_POST['Categorie']);
   $Produit1=htmlspecialchars($_POST['Produit']);
   $Produit=addslashes($Produit1);
   $Peremption=htmlspecialchars($_POST['DatePeremption']);
   $Detail=htmlspecialchars($_POST['Description']);
   $Description=addslashes($Detail);
   $prix_offre=htmlspecialchars($_POST['prix_offre']);
   $lieu_transaction=htmlspecialchars($_POST['lieu_transaction']);
   $Quantite=htmlspecialchars($_POST['Quantite']);
   $departement=htmlspecialchars($_POST['departement']);
   $code_postal=htmlspecialchars($_POST['code_postal']);
   $PhotoDeProduit=htmlspecialchars($_FILES['fichier']['name']);
   $file=htmlspecialchars($_FILES["fichier"]["tmp_name"]);
   $directory= 'vues/PhotoDeProduit/';

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
include('./modeles/AnnoncesModeles.php');
LoadPictures($file,$PhotoDeProduit,$directory);
include('./vues/AnnoncesVues.php'); 
?>