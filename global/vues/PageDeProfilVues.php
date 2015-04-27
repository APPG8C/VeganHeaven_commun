
    <section id="bodyprofil"> 
        <div id="header">
			<?php
			if(isset($_SESSION['member'])||isset($MembreInscrit)){
            echo"<h1 class='titles' id='votre'>Bonjour $username</h1>
			<img id='image' src='vues/PhotoDeProfil/$photo'/>";
			}
			?>
        </div>
        
        <div class="left" class="dive">
            <?php 
			if(isset($_SESSION['member'])||isset($MembreInscrit)){
				echo"<h2 class='titles'>$username</h2>";
				if(isset($photo)){
					echo"<img id='photoleft' src='vues/PhotoDeProfil/$photo'/>";
				}
			}
			?>
            <h4 style="text-align:center">Date d'inscription: 23/03/2015</h4>

            <ol><h4>Mes fruits préférés</h4>
                <li>Les pommes</li>
                <li>Les oranges</li>
                <li>Les figues</li>
            </ol>

            <ol><h4>Mes légumes préférés</h4>
                <li>Les poivrons</li>
                <li>Les tomates</li>
                <li>Les herbes</li>
            </ol>
        </div>

        <div class="right" class="dive">
            <h2 class="titles">Gérer mon compte</h2>

            <ul><h4>Modifier mes informations de profil</h4>
                <a class="modification" href=""><li>Actualiser mes informations personnelles</li></a>
                <a class="modification" href=""><li>Changer ma photo de profil</li></a>
                <a class="modification" href=""><li>Changer mes fruits préférés</li></a>
            </ul>

            <ul><h4>Gérer mes offres</h4>
                <a class="modification" href=""><li>Ajouter une offre</li></a>
                <a class="modification" href=""><li>Supprimer une offre</li></a>
                <a class="modification" href=""><li>Mes offres</li></a>
                    <?php
                    $Id=$_SESSION['ID'];
                    Annonces($Id);
                    ?>

            </ul>

            <table id="tablecontact">
                <thead>
                    <tr>
                        <th colspan="3" style="text-align:center; text-decoration:underline">Mes contacts préférés</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                    </tr>
                    <tr>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                        <td><a href=""><img class="imagecontact" src="vues/images/Contact.gif"></a></td>
                    
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align:center; text-decoration:underline none; font-size:12px;"><strong><a style="color:white" id="tablemodification" href="">Ajouter/supprimer des contacts préférés</a></strong></td>
                    </tr>
                </tbody>
            </table>

        </div>
        
        <div class="center" class="dive">
            <h2 class="titles">Vos informations</h2>
            

				<?php
				if(isset($_SESSION['member'])||isset($MembreInscrit)){
				echo"
				<legend>Informations générales</legend>
				<ul>
                    <li>Date de naissance:<br/>$DateDeNaissance</li>
                </ul>
				<legend>Vos coordoonées:</legend>
					<ul>
					
						<li>Adresse</li>
						<li>$AdresseEmail</li>
						<li>$TelephoneMobile</li>
						<li>$TelephoneFixe</li>
					</ul>
				
				
                <ul>Notes et commentaires des utilisateurs
                    <li>Moyenne des notes: 5/5</li>
                    <li>Avis $username : klm:'Plutôt sympa et une grande disponibilité pour les échanges'</li>
                </ul>";
				}
				?>
            <table id="maptable">
                <thead>
                    <tr>
                        <th>Ma location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                             <img id="mapphoto" src="vues/images/map.PNG"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
	