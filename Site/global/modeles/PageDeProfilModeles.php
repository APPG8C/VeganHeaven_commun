<?php
if(isset($_SESSION['member'])){
   if(isset ($_GET["idMember"])){
      $IDmember=$_GET["idMember"];
      $bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
      $requete=$bdd->prepare('SELECT * FROM users WHERE`id`=?');
      $requete->execute(array($IDmember));
      $reponse=$requete->fetch();
      
      $username=$reponse['username'];
      $DateDeNaissance=$reponse['Age'];
      $TelephoneMobile=$reponse['TelephoneMobile'];
      $TelephoneFixe=$reponse['TelephoneFixe'];
      $AdresseEmail=$reponse['AdresseEmail'];
      $Ville=$reponse['Ville'];
      $Adresse=$reponse['Adresse'];
      $photo=$reponse['PhotoDeProfil'];
   }
   else{
   
   $id=$_SESSION['ID'];
   $bdd = new PDO('mysql:host=db578515750.db.1and1.com;dbname=db578515750;charset=utf8', 'dbo578515750','$Cedbos456');
   $requete=$bdd->prepare('SELECT * FROM users WHERE`id`=?');
   $requete->execute(array( $id));
   $reponse=$requete->fetch();
   $id=$reponse['id'];
   $username=$reponse['username'];
   $DateDeNaissance=$reponse['Age'];
   $TelephoneMobile=$reponse['TelephoneMobile'];
   $TelephoneFixe=$reponse['TelephoneFixe'];
   $AdresseEmail=$reponse['AdresseEmail'];
   $Ville=$reponse['Ville'];
   $Adresse=$reponse['Adresse'];
   $photo=$reponse['PhotoDeProfil'];
   }
}
 if(isset ($_GET["idMember"])){
   $IDmember=$_GET["idMember"];
   $idEvaluateur=$_SESSION['ID'];
   $highNumber=1000000;
   if(TrueId($IDmember) AND $IDmember<=$highNumber){
      if(isset($_POST['avis']) AND isset($_POST['note']))
      {
      $commentaire=htmlspecialchars($_POST['avis']);
      $avis=addslashes($commentaire);
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
}
?>
