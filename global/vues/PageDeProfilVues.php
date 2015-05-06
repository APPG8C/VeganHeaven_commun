<section class="corp"> 
            
             <?php 
             if(isset($_SESSION['member'])||isset($MembreInscrit)){
             echo"<a href='Accueil.php'><img class='logoPagedeprofil'  src='vues/images/VeganHeavenCherry_thumb.png'/></a><p class='infor'><h1 class='titles'>$username</h1></p>";
             }
             ?>
            
            <table class="table">
                
                    <tr>
                        <td>
            
                    <div class="nom">
                        <div class="photo"> 

                        <?php
                            if(isset($_FILES['fichier']['name'])){
                            $NouvellePhoto=$_FILES['fichier']['name'];
                            changerPhoto($id,$NouvellePhoto); 
                            echo"<img class='photoMembre' src='vues/PhotoDeProfil/$NouvellePhoto' height=330px width=260px/>";   
                            }
                            if(isset($photo) AND !isset($_FILES['fichier']['name'])){
                            echo"<img class='photoMembre' src='vues/PhotoDeProfil/$photo' height=330px width=280px/>";
                            }
                            if(!isset($photo) AND !isset($_FILES['fichier']['name'])){
                            echo"<img class='image' src='vues/PhotoDeProfil/contact.gif' height=330px width=260px/>";    
                            }
                            if(!isset ($_GET["idMember"])){

                            echo"
                            <form action='PageDeProfil.php' method='POST'enctype='multipart/form-data'>
                            <p class='infor'><span class='marger'>Changer ma photo de profil :</span></p>
                            <p><input type='file' name='fichier'/>
                            <input type='submit'class='submit-button'value='Valider'/>
                            </p>
                            </form>
                            ";
                            }  
                        ?>
                        </div>
                    </div>
                        </td>
                        <td>
                        <div class="information"> 
                        <h1>Mes informations personnelles</h1>
                                     <?php
                                        if(isset($_SESSION['member'])||isset($MembreInscrit)){
                                        echo"
                                         <legend>Informations générales</legend>
                                            <ul>
                                                <li>Date de naissance:<br/>$DateDeNaissance</li>
                                           </ul>
                                            <legend> Coordoonées:</legend>
                                            <ul>
                                                <li>Adresse</li>
                                                <li>$AdresseEmail</li>
                                                <li>$TelephoneMobile</li>
                                                <li>$TelephoneFixe</li>
                                            </ul>
                                            ";
                                        }
                                        
                                     ?>
                        </div>
                        <?php
                                        if(!isset ($_GET["idMember"]))
                                        {
                                        echo"<span class='marger'><a class='modif' href='ModificationProfil.php'>Modifier mon profil</a></span>";
                                        }
                        ?>
                        </td>
                        <td>
                        <?php
                            if(isset($_SESSION['member'])||isset($MembreInscrit)){
                            echo"
                            <legend> Avis des utilisateurs</legend>
                                <ul>
                                    <li>Moyenne des notes: 5/5</li>
                                    <li>Avis $username :<br/></li>
                                </ul>";
                            }
                            ?>
                        </td>
                    </tr>

        </table>
        <table class="table">

                    <tr>
                        <td>
                        <div class="photo"> 
                        <h1>Ma localisation</h1>
                        <img class='localisation' src="vues/images/map.PNG" height=250px width=500px/>
                        </div>
                        </td>
                        <td>
                        <?php
                        if(isset($_GET["idMember"]))
                        {
                        $idMember=$_GET["idMember"];    
                        echo"<div class='photo'> 
                                <form action='PageDeProfil.php?idMember=".$idMember."'' method='POST'>
                                    <h1>Donner votre avis sur $username:</h1>
                                        <label>Commentaire:<br/><textarea type='text' name='avis'></textarea></label>
                                        <p><label>Note:<br/><select type='text' name='note'>
                                        <option value='1'>1/5</option>
                                        <option value='2'>2/5</option>
                                        <option value='3'>3/5</option>
                                        <option value='4'>4/5</option>
                                        <option value='5'>5/5</option>
                                        </select></label></p>
                                        <input type='submit'class='submit-button'value='Valider'/>
                                 </form>
                            <div>";
                        }
                        if(!isset ($_GET["idMember"])){
                            $Id=$_SESSION['ID'];   
                            if(isset($_GET["Realisee"]) )
                            { 
                            $realisee=$_GET["Realisee"];
                            ModifierStatut_Annonces(1,$realisee);  
                            }
                            else{
                            echo"<div class='information'>
                                    <h1 >Actualiser mon panier</h1>";
                                        Annonces($Id);
                               echo" </div>
                                <p class='infor'><span class='marger'><a class='modif' href='MonCompte.php'>Mes offres</a></span>
                                <span class='marger'><a class='modif' href='creationOffre.php'>Ajouter une offre</a></span></p>
                                        ";
                                }
                            }
                         ?>
                        
                        </td>
                    </tr>
    </table>
</section>
    