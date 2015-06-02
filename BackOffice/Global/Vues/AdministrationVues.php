<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" />
    <link rel='stylesheet' href='Vues/BackOffice.css'>
</head>
<body>
<title>Administration</title>
        

<?php
if(!isset($_SESSION['ID'])){
echo"<h1 class='site'>VeganHeaven</h1>
	<form class='form' action='Administration.php?page=Accueil'method='POST'>
	<h2 >Administration</h2>
	<div>Votre nom d'administrateur</div>
		<input  type='text' name='user'/><br/>
		<div> Mot de passe</div>
		<input type='password' name='pass'/><br/>
		<div>
		<input  type='submit' value='Valider'/>
	</div>
</form>";
}
?>
</body>
</html>