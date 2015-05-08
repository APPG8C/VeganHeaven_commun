<?php
if(isset($_SESSION['member'])){
   if(isset ($_GET["idMember"])){
      $IDmember=$_GET["idMember"];
      $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
      $requete=$bdd->prepare('SELECT * FROM users WHERE`id`=?');
      $requete->execute(array($IDmember));
      $reponse=$requete->fetch();
      
      $username=$reponse['username'];
      $DateDeNaissance=$reponse['DateDeNaissance'];
      $TelephoneMobile=$reponse['TelephoneMobile'];
      $TelephoneFixe=$reponse['TelephoneFixe'];
      $AdresseEmail=$reponse['AdresseEmail'];
      $photo=$reponse['PhotoDeProfil'];
   }
   else{
   
   $member=$_SESSION['member'];
   $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root','root');
   $requete=$bdd->prepare('SELECT * FROM users WHERE`username`=?');
   $requete->execute(array($member));
   $reponse=$requete->fetch();
   $id=$reponse['id'];
   $username=$reponse['username'];
   $DateDeNaissance=$reponse['DateDeNaissance'];
   $TelephoneMobile=$reponse['TelephoneMobile'];
   $TelephoneFixe=$reponse['TelephoneFixe'];
   $AdresseEmail=$reponse['AdresseEmail'];
   $photo=$reponse['PhotoDeProfil'];
   }
}
 if(isset ($_GET["idMember"])){
   $IDmember=$_GET["idMember"];
   $idEvaluateur=$_SESSION['ID'];
   if(isset($_POST['avis']) AND isset($_POST['note']))
   {
   $avis=$_POST['avis'];
   $note=$_POST['note'];
   $request = $bdd->query("INSERT INTO `membre`.`avis` (`idAvis`, `contenu`, `note`,`idMembre_note`,`idEvaluateur`,`DatePublicationAvis`) VALUES (
         NULL,
         '$avis',
         '$note',
         '$IDmember',
         '$idEvaluateur',
          NOW()
         );"); 
   }
}
?>
