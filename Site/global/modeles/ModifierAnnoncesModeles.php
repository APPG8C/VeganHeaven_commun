<?php
if(isset($_SESSION['ID']))
{
   $idAnnonces=$_GET['idAnnonces'];
   if(isset($_POST['Categorie']))
   {
      $Categorie=$_POST['Categorie'];
      if($Categorie!=NULL)
      {
         ModifierChamp('annonces','Categorie',$Categorie,'idAnnonces',$idAnnonces);
         echo"<p>Nouvelle Catégorie : $Categorie</p>"; 
      }  
   }
   if(isset($_POST['prix_offre']))
   {
      $prix_offre=$_POST['prix_offre'];
      if($prix_offre!=NULL)
      {
         ModifierChamp('annonces','prix_offre',$prix_offre,'idAnnonces',$idAnnonces); 
         echo"<p>Nouveau prix : $prix_offre";  
      }
   }
   if(isset($_POST['lieu_transaction']))
   {
      $lieu_transaction=$_POST['lieu_transaction'];
      if($lieu_transaction!=NULL)
      {
         ModifierChamp('annonces','lieu_transaction',$lieu_transaction,'idAnnonces',$idAnnonces);
         echo"<p>Nouvelle adresse : $lieu_transaction</p>";  
      } 
   }
   if(isset($_POST['Produit'])){
      $NouveauProduit=htmlspecialchars($_POST['Produit']);
      if($NouveauProduit!=NULL)
      {
         ModifierChamp('annonces','Produit',$NouveauProduit,'idAnnonces',$idAnnonces);
         echo"<p>Nouveau produit : $NouveauProduit</p>"; 
      }  
   }
   if(isset($_POST['Description']))
   {
      $Description=htmlspecialchars($_POST['Description']);
      $Detail=addslashes($Description);
      if($Detail!=NULL)
      {
         ModifierChamp('annonces','Description',$Detail,'idAnnonces',$idAnnonces);
         echo"<p>Nouvelle description : $Description</p> ";   
      }
   }
   if(isset($_POST['Quantite']))
   {
      $Quantite=htmlspecialchars($_POST['Quantite']);
      if($Quantite!=NULL)
      {
         ModifierChamp('annonces','Quantite',$Quantite,'idAnnonces',$idAnnonces);
         echo"<p>Nouvelle quantité : $Quantite</p> ";   
      }
   }
   if(isset($_POST['Date']))
   {
      $Date=htmlspecialchars($_POST['Date']);
      if($Date!=NULL)
      {
         ModifierChamp('annonces','Date',$Date,'idAnnonces',$idAnnonces);
         echo"<p>Nouvelle date : $Date</p> ";   
      }
   }
   if(isset($_POST['departement']))
   {
      $departement=htmlspecialchars($_POST['departement']);
      if($departement!=NULL)
      {
         ModifierChamp('annonces','departement',$departement,'idAnnonces',$idAnnonces);
         echo"<p>Nouveau departement : $departement</p> ";   
      }
   }
   if(isset($_FILES['fichier']['name']) AND isset($_FILES["fichier"]["tmp_name"]))
   {
      $PhotoDeProduit=htmlspecialchars($_FILES['fichier']['name']);
      $file=htmlspecialchars($_FILES["fichier"]["tmp_name"]);
      $directory= 'vues/PhotoDeProduit/';
      if($PhotoDeProduit!=NULL AND  $file!=NULL)
      {
      ModifierChamp('annonces','Url_Image',$PhotoDeProduit,'idAnnonces',$idAnnonces); 
      echo"<p>Photo bien enregitrée</p> ";
      }
      
   }
   if(isset($_POST['code_postal']))
   {
      $code_postal=$_POST['code_postal'];
      if($code_postal!=NULL)
      {
         ModifierChamp('annonces','code_postal',$code_postal,'idAnnonces',$idAnnonces);   
      }
   }
   if(isset($_POST['ville']))
   {
      $ville=$_POST['ville'];
      if($ville!=NULL)
      {
         ModifierChamp('annonces','ville',$ville,'idAnnonces',$idAnnonces);   
      }
   }
}
?>