<?php
if(isset($_SESSION['member']))
{
   $id=$_SESSION['ID'];
   if(isset($_POST['username']))
   {
      $username=$_POST['username'];
      if($username!=NULL)
      {
         ModifierChampProfil('username',$username,$id);
         echo"<p>Nouveau Prénom : $username</p>"; 
      }  
   }
   if(isset($_POST['DateDeNaissance']))
   {
      $DateDeNaissance=$_POST['DateDeNaissance'];
      if($DateDeNaissance!=NULL)
      {
         ModifierChampProfil('DateDeNaissance',$DateDeNaissance,$id); 
         echo"<p>Nouvelle date de Naissance : $DateDeNaissance (Il est étrange de changer de date de naissance, mais puisque vous insistez....)</p>" ;  
      }
   }
   if(isset($_POST['TelephoneMobile']))
   {
      $TelephoneMobile=$_POST['TelephoneMobile'];
      if($TelephoneMobile!=NULL)
      {
         ModifierChampProfil('TelephoneMobile',$TelephoneMobile,$id);
         echo"<p>Nouveau téléphone mobile : $TelephoneMobile</p>";  
      } 
   }
   if(isset($_POST['TelephoneFixe'])){
      $TelephoneFixe=$_POST['TelephoneFixe'];
      if($TelephoneFixe!=NULL)
      {
         ModifierChampProfil('TelephoneFixe',$TelephoneFixe,$id);
         echo"<p>Nouveau téléphone fixe : $TelephoneFixe</p>"; 
      }  
   }
   if(isset($_POST['AdresseEmail']))
   {
      $AdresseEmail=$_POST['AdresseEmail'];
      if($AdresseEmail!=NULL)
      {
         ModifierChampProfil('AdresseEmail',$AdresseEmail,$id);
         echo"<p>Nouvel email : $AdresseEmail</p> ";   
      }
   }
}
?>