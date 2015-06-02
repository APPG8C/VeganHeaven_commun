<?php
if(isset($_SESSION['member']))
{
   $id=$_SESSION['ID'];
   if(isset($_POST['username']))
   {
      $username=$_POST['username'];
      if($username!=NULL)
      {
         ModifierChamp('users','username',$username,'id',$id);
         echo"<p>Nouveau Prénom : $username</p>"; 
      }  
   }
   if(isset($_POST['Age']))
   {
      $Age=$_POST['Age'];
      if($Age!=NULL)
      {
         ModifierChamp('users','Age',$Age,'id',$id); 
         echo"<p>Nouvelle date de Naissance : $Age ans (Il est étrange de changer d'age, mais puisque vous insistez....)</p>" ;  
      }
   }
   if(isset($_POST['TelephoneMobile']))
   {
      $TelephoneMobile=$_POST['TelephoneMobile'];
      if($TelephoneMobile!=NULL)
      {
         ModifierChamp('users','TelephoneMobile',$TelephoneMobile,'id',$id);
         echo"<p>Nouveau téléphone mobile : $TelephoneMobile</p>";  
      } 
   }
   if(isset($_POST['TelephoneFixe'])){
      $TelephoneFixe=$_POST['TelephoneFixe'];
      if($TelephoneFixe!=NULL)
      {
         ModifierChamp('users','TelephoneFixe',$TelephoneFixe,'id',$id);
         echo"<p>Nouveau téléphone fixe : $TelephoneFixe</p>"; 
      }  
   }
   if(isset($_POST['AdresseEmail']))
   {
      $AdresseEmail=$_POST['AdresseEmail'];
      if($AdresseEmail!=NULL)
      {
         ModifierChamp('users','AdresseEmail',$AdresseEmail,'id',$id);
         echo"<p>Nouvel email : $AdresseEmail</p> ";   
      }
   }
}
?>