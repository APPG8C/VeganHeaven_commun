<section class="corp"> 
            
             <?php 
             $idmembre=$_SESSION['ID']; // identifiant du membre connecté
             if(isset($idmembre)||isset($MembreInscrit)){
             echo"<a href='globalControleur.php?page=Accueil'><img class='logoPagedeprofil'  src='vues/images/VeganHeavenCherry_thumb.png'/></a><p class='infor'><h1 class='titles'>$username</h1></p>";
             }
             if(isset($_GET["idMember"])){
             $IdUrl=(int)$_GET["idMember"];// identifiant d'un autre membre présent dans l'url afin d'accerder à sa page de profil 
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
                            echo"<img class='photoMembre' src='vues/PhotoDeProfil/$NouvellePhoto' height=250px width=205px/>";   
                            }
                            if(isset($photo) AND !isset($_FILES['fichier']['name'])){
                            echo"<img class='photoMembre' src='vues/PhotoDeProfil/$photo' height=250px width=205px/>";
                            }
                            if(!isset($photo) AND !isset($_FILES['fichier']['name'])){
                            echo"<img class='image' src='vues/PhotoDeProfil/contact.gif' height=250px width=205px/>"; 
                            echo"<p> Cet identifiant ne correspond à aucun utilisateur</p>";   
                            }
                            if(!isset ($IdUrl)){

                            echo"
                            <form action='globalControleur.php?page=PageDeProfil' method='POST'enctype='multipart/form-data'>
                            <p class='infor'>
                            <span class='marger'>Changer ma photo de profil :</span>
                            <span class='marger'><a class='modif' href='globalControleur.php?page=ModificationProfil'>Modifier mon profil</a></span>
                            </p>
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
                                     <?php
                                        if(isset($_SESSION['member'])||isset($MembreInscrit)){
                                        echo"
                                         <legend>Informations générales</legend>
                                            <ul>
                                                <li>Age:$DateDeNaissance ans</li>
                                           </ul>
                                            <legend> Coordoonées:</legend>
                                            <ul>
                                                <li>Adresse: $Adresse</li>
                                                <li>Ville: $Ville</li>
                                                <li>Email: $AdresseEmail</li>
                                                <li>Tél. Mobile: $TelephoneMobile</li>
                                                <li>Tél. Fixe: $TelephoneFixe</li>
                                            </ul>
                                            ";
                                        }
                                        
                                     ?>
                        </div>
                        <div class="geocalisation"> 
                        <?php
                        include("geocalisation.php");
                        ?>
                        <form>
                            <input type="button"  value="Localiser" onclick="TrouverAdresse();"/>
                           <?php
                           if(isset($Adresse) AND isset($Ville)){
                            echo"<input type='text' value='$Adresse $Ville' id='adresse'class='geotext'/>";
                            }
                            else
                            {
                            echo"<input type='text' id='adresse' class='geotext'/>";     
                            }
                            ?>
                        </form>
                        </div>
                        </td>
                        
                    </tr>

        </table>
        <table class="table">

                    <tr>
                        <td>
                            <div class="Avis">
                            <?php
                            if((isset($idmembre)||isset($MembreInscrit)) AND !isset($IdUrl)){
                            GetAvis_Note($idmembre,$username);
                            }
                            if((isset($idmembre)||isset($MembreInscrit)) AND isset($IdUrl))
                            {
                                if(TrueId($IdUrl) AND  $IdUrl<=1000000){
                                    if($idmembre!=$IdUrl){
                                    $idUrlMembre=$IdUrl;
                                    GetAvis_Note($idUrlMembre,$username);
                                    }
                                }        
                            }
                            ?>
                            </div>
                        </td>
                        <td>
                        <?php
                        if(isset($IdUrl))
                        {
                            if($IdUrl<=1000000)
                            {
                                if($IdUrl!=$idmembre)
                                {   
                                    echo"<div class='photo'> 
                                            <form action='globalControleur.php?page=PageDeProfil&amp;idMember=".$IdUrl."'' method='POST'>
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
                            }
                        }
                        echo"<div class='offres'>";
                        if(!isset ($IdUrl))
                        {   
                            if(isset($_GET["Realisee"]))
                            { 
                            $realisee=$_GET["Realisee"];
                            ModifierStatutAnnonces(1,$realisee); 
                            echo"
                            <div class='information'>
                                    <h1 >Actualiser mes annonces</h1>
                            ";
                            Annonces($idmembre,0);
                            echo" 
                            </div>
                                <p class='infor'><span class='marger'><a class='modif' href='globalControleur.php?page=MonCompte'>Mes offres</a></span>
                                <span class='marger'><a class='modif' href='globalControleur.php?page=creationOffre'>Ajouter une offre</a></span></p>
                            "; 
                            }
                            else
                            {
                            echo"
                            <div class='information'>
                                    <h1 >Actualiser mes annonces</h1>
                            ";
                            Annonces($idmembre,0);
                            echo" 
                            </div>
                                <p class='infor'><span class='marger'><a class='modif' href='globalControleur.php?page=MonCompte'>Mes offres</a></span>
                                <span class='marger'><a class='modif' href='globalControleur.php?page=CreationOffre'>Ajouter une offre</a></span></p>
                            ";
                            }
                        }
                         echo"</div>";
                         ?>
                        </td>
                    </tr> 
    </table>
</section>
    