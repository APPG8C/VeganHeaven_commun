<html>
	<table class="tabInscription">
        <tr>
            <td>
                <section class="formInscription">
                    <form id="myForm" class="formLog" action="globalControleur.php?page=ConnexionInscription" method="POST"enctype="multipart/form-data">

                        <legend><h2>Inscription</h2>*Obligatoire</legend>

                        <label class="form_col" for="username">Pseudo*:</label>
                        <input type="text" name="username" id="username"  placeholder="Henry"/>
                        <span class="tooltip">Un pseudo doit excéder 2 caractères</span>    
                        <br />

                        <label class="form_col" for="username">Adresse* : </label>
                        <input type="text" name="Adresse" id="Adresse" placeholder="99, rue des Dunes"/>
                        <span class="tooltip"> Entrez une adresse</span>
                        <br />

                        <label class="form_col" for="Ville">Ville* :</label>
                        <input type="text" name="Ville" id="Ville" placeholder="SAINT-MALO"/>
                        <span class="tooltip">Entrez une Ville</span>
                        <br />

                        <label class="form_col" for="Age">Age* :</label>
                        <input type="text" name="Age" id="Age" placeholder="50" />
                        <span class="tooltip">Vous devez être majeur pour vous inscrire</span>
                        <br />

                        <label class="form_col" for="TelephoneMobile">Téléphone mobile*:</label>
                        <input type="text" name="TelephoneMobile" id="TelephoneMobile" placeholder="0664498714"/>
                        <span class="tooltip">Téléphone mobile obligatoire</span>
                        <br />

                        <label class="form_col" for="TelephoneFixe">Téléphone fixe*:</label>
                        <input type="text" name="TelephoneFixe" id="TelephoneFixe" placeholder="0184161433"/>
                        <span class="tooltip">Téléphone fixe obligatoire</span>
                        <br />

                        <label class="form_col" for="AdresseEmail">Adresse email*: </label>
                        <input type="text" name="AdresseEmail" id="AdresseEmail" placeholder="HenryHeaven@gmail.com" />
                        <span class="tooltip">Adresse email obligatoire</span>
                        <br />

                        <label class="form_col" for="password">Mot de passe*: </label> 
                        <input type="password" name="password" id="password"/>
                        <span class="tooltip">Le mot de passe doit faire plus de 6 caractères</span>
                        <br />

                        <label class="form_col" for="repeatpassword">Confirmation Mot de passe*:</label>
                        <input type="password" name="repeatpassword" id="repeatpassword"/>
                        <span class="tooltip"> Doit être identique au mot de passe</span>
                        <br />

                        <label class="form_col" for="fichier">Photo de profil :</label><br />
                        <input type="file" name="fichier" id="fichier"/>
                        <span class="tooltip">Le format pris en charge est le jpg</span>
                        <br />

                        <p><input type="submit"class="submit-button"value="M'inscrire"/></p>
                    </form>
                </section>
            </td>

            <td>
				<article class="texteI">
				<legend><h2>Rejoingnez nous !!</h2></legend>
				<p>	Pourquoi s'inscrire sur Vegan Heaven ? Voyons ne vous posez plus cette question.
					Rejoindre la communauté la plus fruitée et vitaminée du web proche de chez vous change à tout jamais vôtre alimentation. Si, si croyez nous, vos repas seront meilleurs,
					et vous resplendirez de santé.<br/>Vous allez pouvoir comparez les annonces que nos membres publient quotidienement, et concoctez vos dessert et vos plats de la plus belle manière qui soit:
					avec le sourire ! Finit les produits pas frais, les membres s'engagent à échanger (ou acheter si necessaire) votre produit avec des légumes ou fruits provenant de leur jardin.
				</p>
				<p>					
					Vous avez compris ? Non, je ne crois pas, vous lisez encore ce texte au lieu de vous inscrire gratuitement... Allez, soyer des nôtres! On vous attend impatiement et on espère vite vous retrouver sur la communauté de VeganHeaven.
				</p>
				<p><img class='imageCerise' src='vues/images/Inscription.jpg' width="80%" height="50%"/></p>				
				</article>
			</td>
		</tr>
	</table>
</html>
<script>
// Fonction de désactivation de l'affichage des "tooltips"
    
    function deactivateTooltips() {
    
    var tooltips = document.querySelectorAll('.tooltip'),
    tooltipsLength = tooltips.length;
    
    for (var i = 0 ; i < tooltipsLength ; i++) {
    tooltips[i].style.display = 'none';
    }
    
    }
    
    
    // La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input
    
    function getTooltip(elements) {
    
    while (elements = elements.nextSibling) {
    if (elements.className === 'tooltip') {
    return elements;
    }
    }
    
    return false;
    
    }
    function isEmail(myVar){
    
     var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');

     return regEmail.test(myVar);
   }
    
    // Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok
    
    var check = {}; // On met toutes nos fonctions dans un objet littéral
    
    
    check['username'] = function() {
    
    var name = document.getElementById('username'),
    tooltipStyle = getTooltip(name).style;
    
    if (name.value.length >= 2) {
    name.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    name.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    
    };
    
    check['Age'] = function() {
    
    var age = document.getElementById('Age'),
    tooltipStyle = getTooltip(age).style,
    ageValue = parseInt(age.value);
    
    if (!isNaN(ageValue) && ageValue >= 18) {
    age.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    age.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    
    };
    
    check['Ville'] = function(id) {
    
    var ville = document.getElementById(id),
    tooltipStyle = getTooltip(ville).style;
    
    if (ville.value.length!='') {
    ville.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    ville.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    };
    check['TelephoneFixe']=check['TelephoneMobile']=check['Adresse']=check['Ville'];

    check['AdresseEmail'] = function() {
    
    var AdresseEmail = document.getElementById('AdresseEmail'),
    tooltipStyle = getTooltip(AdresseEmail).style;
    var Email = myForm.AdresseEmail.value;
    
    if (isEmail(Email)==true) {
    AdresseEmail.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } 
    else
    {
    AdresseEmail.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    
    };

    
    check['password'] = function() {
    
    var pwd1 = document.getElementById('password'),
    tooltipStyle = getTooltip(pwd1).style;
    
    if (pwd1.value.length >= 6) {
    pwd1.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    pwd1.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    
    };
    
    check['repeatpassword'] = function() {
    
    var pwd1 = document.getElementById('password'),
    pwd2 = document.getElementById('repeatpassword'),
    tooltipStyle = getTooltip(pwd2).style;
    
    if (pwd1.value == pwd2.value && pwd2.value != '') {
    pwd2.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
    } else {
    pwd2.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
    }
    
    };
    
    // Mise en place des événements
    
    (function() { // Utilisation d'une IIFE pour éviter les variables globales.
    
    var myForm = document.getElementById('myForm'),
    inputs = document.querySelectorAll('input[type=text], input[type=password]'),
    inputsLength = inputs.length;
    
    for (var i = 0 ; i < inputsLength ; i++) {
    inputs[i].addEventListener('keyup', function(e) {
    check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
    }, false);
    }
    
  
    
    })();
    
    
    // Maintenant que tout est initialisé, on peut désactiver les "tooltips"
    
    deactivateTooltips();
</script>