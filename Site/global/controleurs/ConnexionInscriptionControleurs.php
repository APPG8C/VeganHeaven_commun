<?php
$options = array
(
    'username' => FILTER_SANITIZE_STRING,
    'Adresse' => FILTER_SANITIZE_STRING,
    'TelephoneMobile' => FILTER_SANITIZE_STRING,
    'TelephoneFixe' => FILTER_SANITIZE_STRING, //Enlever les balises.
    'AdresseEmail' => FILTER_VALIDATE_EMAIL, //Valider l'adresse de messagerie.
    'Adresse' => FILTER_SANITIZE_STRING,
    'Ville' => FILTER_SANITIZE_STRING,
    'Age' => array('filter' => FILTER_VALIDATE_INT, 'options' => array('min_range' => 0 )),
    'password' => FILTER_SANITIZE_STRING,
    'repeatpassword' => FILTER_SANITIZE_STRING
);

$resultat = filter_input_array(INPUT_POST, $options);
?>

<?php
if($resultat != null) { //Si le formulaire a bien été posté.
    //Enregistrer des messages d'erreur perso.
    $messageErreur = array(
        'AdresseEmail' => 'L\'adresse de messagerie n\'est pas valide.',
        'Age' => 'Veuillez entrer un nombre entier positif pour votre âge.'
    );
    
    $nbrErreurs = 0;

    foreach($options as $cle => $valeur) 
    { //Parcourir tous les champs voulus.
        if(empty($_POST[$cle])) { //Si le champ est vide.
            echo 'Veuillez remplir le champ ' . $cle . '.<br/>';
            $nbrErreurs++;
        }
        elseif($resultat[$cle] === false) { //S'il n'est pas valide.
            echo $messageErreur[$cle] . '<br/>';
            $nbrErreurs++;
        }
    }

    if($nbrErreurs == 0) 
    {
    	$MembreInscrit=false;
    	$username=$resultat['username'];
        if(nomIdentique($username)==0)
        {

            $password1=$resultat['password'];
            $password2=$resultat['repeatpassword'];
        	if(($password1 === $password2))
    		{
    			
    			$passwordh=password_hash($password1,PASSWORD_BCRYPT); 
                $Age=$resultat['Age'];
                $TelephoneMobile=$resultat['TelephoneMobile'];
                $TelephoneFixe=$resultat['TelephoneFixe'];
                $AdresseEmail=$resultat['AdresseEmail'];
                $Adresse=$resultat['Adresse'];
                $Ville=$resultat['Ville'];
                $PhotoDeProfil=htmlspecialchars($_FILES['fichier']['name']);
                $file=htmlspecialchars($_FILES["fichier"]["tmp_name"]);
                $directory= 'vues/PhotoDeProfil/';
				include('./modeles/ConnexionInscriptionModeles.php');
				$MembreInscrit=true;
				LoadPictures($file,$PhotoDeProfil,$directory);
    			echo"<script>
                alert('Félicitation, vous voila maintenant inscrit comme membre de VeganHeaven,veuillez vous connecter pour commencer vos échanges.');
                </script>";
    			}	
    		else
    		{
            echo"<script>
            alert('Echec de validation du mot de passe');
            </script>";
    		} 
        }
        else
        {
        echo"<script>
        alert('Cet identifiant est déja utilisé, veuillez en choisir un autre en retournant sur la page précédente');
        </script>";
        } 
    }
}
include('./vues/ConnexionInscriptionVues.php');
?>