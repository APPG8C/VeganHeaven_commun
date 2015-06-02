<?php
$membreConnecte=false;
$MauvaisMotdePasse=false;
$ChampsVide=false;
$NonAdmin=false;
if(isset($_POST['user'])AND isset($_POST['pass'])){	
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if($user!=NULL AND $pass!=NULL)
	{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT`id`,`password`,`Admin` FROM users WHERE`username`=?');
	$requete->execute(array($user));
	$reponse=$requete->fetch();
	$passh=$reponse['password'];
	$ID=$reponse['id'];
	$Admin=$reponse['Admin'];
	if(password_verify($pass,$passh))
	{
		if($Admin==1)
		{
			$membreConnecte=true;
			$_SESSION['member']=$user;
			$_SESSION['ID']=$ID;
		}
		
	}
	if(password_verify($pass,$passh)==false)
	{
	$MauvaisMotdePasse=true;
	}	
	if($Admin!=1)
	{
	$NonAdmin=true;
	}
	else
	{
	$ChampsVide=true;
	}
}
}

?>
<?php
if($NonAdmin)
{
	echo"
		<script>
			alert('Vous ne possedez le statut approprié pour administer VeganHeaven, $user');
		</script>
		";
}
if($membreConnecte)
{
	echo"
		<script>
			alert('Bonjour, $user');
		</script>
		";
}
if($MauvaisMotdePasse)
{
echo"
	<script>
		alert('Mauvais Mot de Passe');
		prompt('Mot de passe oublié ?');
	</script>
	";
}
if($ChampsVide)
{
echo"
	<script>
		alert('Veuillez remplir les deux champs');
		prompt(Etes vous inscrit sur VeganHeaven ?);
	</script>
	";   
}