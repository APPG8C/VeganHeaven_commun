<?php
	$compteur=0;
	function AnnonceAleatoire()
	{
	global $compteur;	
	for($i=0; $i<4; $i++)
	{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$requete = $bdd->query('SELECT `idAnnonces` FROM annonces ORDER BY RAND() LIMIT 1');
	while($reponse=$requete->fetch()) 
	{
		$idAnnonces=$reponse['idAnnonces'];
	}
	return $idAnnonces;
	$compteur++;
	}
	}

	function AnnonceRecherche()
	//$Produit = 'Oranges';
	{
	echo"<h1>Des annonces selectionées par nos soins:</h1>";
	for($i=0; $i<4; $i++)
	{	
	$idAnnonces = AnnonceAleatoire();
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre;charset=utf8', 'root','root');
	$requete=$bdd->prepare('SELECT `Produit`,`Transaction`,`prix_offre`,`code_postal`,`Description`, `Categorie`,`Url_Image`,`DatePublication` 
		FROM annonces WHERE `idAnnonces`= ?');	
	$requete->execute(array($idAnnonces));
	while($reponse=$requete->fetch()){
	$Produit=$reponse['Produit'];
	$Categorie=$reponse['Categorie'];
	$Transaction=$reponse['Transaction'];
	$prix_offre=$reponse['prix_offre'];
	$code_postal=$reponse['code_postal'];
	$Description=$reponse['Description'];
	$Categorie=$reponse['Categorie'];
	$Url_Image=$reponse['Url_Image'];
	$DatePublication=$reponse['DatePublication'];

	echo "
			<div id='divOffre'>
		<div class='image_offre' >
		<a href='Produits.php?variable=".$Produit."'><img  src='vues/photoDeProduit/$Url_Image' alt='photo offre' width=170px height=170px/></a>
		</div>
			<div class='description_offre'>	
			<h3 class='titre_offre'> $Produit </h3>
			Catégorie du produit: $Categorie </br>
			<p class='paragraphe_offre'> Description:<br/>
				$Description
				Code postal : $code_postal </br>
				prix : $prix_offre € </br>
				date de péremption : $DatePublication </br>
			</p>
		</div>

	</div>
	";
	}
	}
	}
	
	function AnnonceUnique()
	{
		echo "$compteur";
	}
?>
<?php
function RechercheTotale()
{
	echo"<h1>Les annonces correspondant à votre recherche :</h1>";
	$Categorie='Categorie';
	$Produit='Produit';
	$Date='Date';
	$Annonceur='Annonceur';
	$transaction='Transaction';

	$transac=$_GET["Transaction"];
	$Categ=$_GET["Categorie"];	
	$Prod=$_GET["Produit"];
	$Dat=$_GET["Date"];	
	$Annon=$_GET["Annonceur"];
/*------------Pour 1 champs-----------*/	
	if(isset($transac)){
		if($transac!=NULL AND $Categ==NULL AND $Dat==NULL AND $Annon==NULL AND $Prod==NULL){
			Recherche1Champ($transaction,$transac);
		}
	}
	if(isset($Categ)){
		
		if($Categ!=NULL AND $Prod==NULL AND $Dat==NULL  AND $Annon==NULL AND $transac==NULL){
			Recherche1Champ($Categorie,$Categ);
		}
	}
	if(isset($Prod)){
		
		if($Prod!=NULL AND $Categ==NULL AND $Dat==NULL  AND $Annon==NULL AND $transac==NULL ){
			Recherche1Champ($Produit,$Prod);
		}
	}
	if(isset($Dat)){
		
		if($Dat!=NULL AND $Prod==NULL AND $transac==NULL  AND $Annon==NULL AND $Categ ==NULL){
			Recherche1Champ($Date,$Dat);
		}
	}
	if(isset($Annon)){
		
		if($Annon!=NULL AND $Prod==NULL AND $transac==NULL AND $Dat==NULL AND $Categ ==NULL){
			Recherche1Champ($Annonceur,$Annon);
		}
	}
/*------------Pour 2 champs-----------*/
/*------------Pour transac-----------*/
	if(isset($Categ) AND isset($transac)){
		
		if($Categ!=NULL AND $transac!= NULL AND $Dat==NULL  AND $Annon==NULL AND $Prod==NULL ){
			Recherche2Champ($transaction,$transac,$Categorie,$Categ);
		}
	}
	if(isset($transac) AND isset($Prod)){
		
		if($transac!=NULL AND $Prod!= NULL AND $Dat==NULL  AND $Annon==NULL AND $Categ==NULL){
			Recherche2Champ($transaction,$transac,$Produit,$Prod);
		}
	}
	if(isset($transac) AND isset($Dat)){
		
		if($transac!=NULL AND $Dat!= NULL AND $Prod==NULL  AND $Annon==NULL AND $Categ==NULL ){
			Recherche2Champ($transaction,$transac,$Date,$Dat);
		}
	}
	if(isset($transac) AND isset($Annon)){
		
		if($transac!=NULL AND $Annon!= NULL AND $Prod==NULL  AND $Dat==NULL AND $Categ==NULL){
			Recherche2Champ($transaction,$transac,$Annonceur,$Annon);
		}
	}
/*------------Pour Categ-----------*/
	if(isset($Categ) AND isset($Prod))
	{
		
		if($Categ!=NULL AND $Prod!= NULL AND $Dat==NULL  AND $Annon==NULL AND $transac==NULL ){
			Recherche2Champ($Categorie,$Categ,$Produit,$Prod);
		}
	}
	if(isset($Categ) AND isset($Dat))
	{
		
		if($Categ!=NULL AND $Dat!= NULL AND $Prod==NULL  AND $Annon==NULL AND $transac==NULL ){
			Recherche2Champ($Categorie,$Categ,$Date,$Dat);
		}
	}
	if(isset($Categ) AND isset($Annon)){
		
		if($Categ!=NULL AND $Annon!= NULL AND $Prod==NULL AND $Dat==NULL AND $transac==NULL ){
			Recherche2Champ($Categorie,$Categ,$Annonceur,$Annon);
		}
	}
	/*------------Pour Prod-----------*/
	if(isset($Prod) AND isset($Dat))
	{
		
		if($Prod!=NULL AND $Dat!= NULL AND $Categ==NULL  AND $Annon==NULL AND $transac==NULL ){
			Recherche2Champ($Produit,$Prod,$Date,$Dat);
		}
	}
	
	if(isset($Prod) AND isset($Annon)){
		
		if($Prod!=NULL AND $Annon!= NULL AND $Categ==NULL AND $Dat==NULL AND $transac==NULL ){
			Recherche2Champ($Produit,$Prod,$Annonceur,$Annon);
		}
	}
	/*------------Pour Dat-----------*/
	if(isset($Dat)AND isset($Annon))
		{
		
		if($Annon!=NULL AND $Dat!= NULL AND $Categ==NULL  AND $Prod==NULL AND $transac==NULL ){
			Recherche2Champ($Annonceur,$Annon,$Date,$Dat);
		}
	}
	/*----------------------------Pour 3 champs-------------------*/
	/*-------------pour categ et transac---------------*/
	if(isset($Categ) AND isset($transac) AND isset($Prod)){
		
		if($Categ!=NULL AND $transac!= NULL AND $Dat==NULL  AND $Annon==NULL AND $Prod!= NULL){
			Recherche3Champ($transaction,$transac,$Categorie,$Categ,$Produit,$Prod);
		}
	}
	if(isset($Categ) AND isset($transac) AND isset($Dat)){
		
		if($transac!=NULL AND $Prod== NULL AND $Dat!=NULL  AND $Annon==NULL AND $Categ!=NULL){
			Recherche3Champ($transaction,$transac,$Date,$Dat,$Categorie,$Categ);
		}
	}
	if(isset($Categ) AND isset($transac) AND isset($Annon)){
		
		if($transac!=NULL AND $Annon!= NULL AND $Prod==NULL  AND $Dat==NULL AND $Categ!=NULL ){
			Recherche3Champ($transaction,$transac,$Annonceur,$Annon,$Categorie,$Categ);
		}
	}
	/*-------------pour categ et prod---------------*/
	if(isset($Categ) AND isset($Prod) AND isset($Dat)){
		
		if($Categ!=NULL AND $transac== NULL AND $Dat!=NULL  AND $Annon==NULL AND $Prod!= NULL){
			Recherche3Champ($Produit,$Prod,$Categorie,$Categ,$Date,$Dat);
		}
	}
	if(isset($Categ) AND isset($Prod) AND isset($Annon)){
		
		if($transac==NULL AND $Prod!= NULL AND $Dat==NULL  AND $Annon!=NULL AND $Categ!=NULL){
			Recherche3Champ($transaction,$transac,$Annonceur,$Annon,$Produit,$Prod);
		}
	}
	/*-------------pour prod et date---------------*/
	if( isset($Prod) AND isset($Dat) AND isset($Annon) ){
		
		if($Categ==NULL AND $transac== NULL AND $Dat!=NULL  AND $Annon!=NULL AND $Prod!= NULL){
			Recherche3Champ($Produit,$Prod,$Categorie,$Categ,$Date,$Dat);
		}
	}
	/*----------------------------Pour 4 champs-------------------*/
	if(isset($Categ) AND isset($transac) AND isset($Prod) AND isset($Dat)){
		
		if($Categ!=NULL AND $transac!= NULL AND $Dat!=NULL  AND $Annon==NULL AND $Prod!= NULL){
			Recherche3Champ($transaction,$transac,$Categorie,$Categ,$Produit,$Prod,$Date,$Dat);
		}
	}
	if(isset($Categ) AND isset($transac) AND isset($Prod) AND isset($Annon)){
		
		if($transac!=NULL AND $Prod!= NULL AND $Dat==NULL  AND $Annon!=NULL AND $Categ!=NULL){
			Recherche3Champ($transaction,$transac,$Produit,$Prod,$Categorie,$Categ,$Annonceur,$Annon);
		}
	}
	if(isset($Categ) AND isset($Prod) AND isset($Dat) AND isset($Annon)){
		
		if($transac==NULL AND $Prod!= NULL AND $Dat!=NULL  AND $Annon!=NULL AND $Categ!=NULL){
			Recherche3Champ($Categorie,$Categ,$Date,$Dat,$Produit,$Prod,$Annonceur,$Annon);
		}
	}
	if(isset($Categ) AND isset($Prod) AND isset($Dat) AND isset($Annon) AND isset($transac)){
		
		if($transac!=NULL AND $Prod!= NULL AND $Dat!=NULL  AND $Annon!=NULL AND $Categ!=NULL){
			Recherche3Champ($transaction,$transac,$Categorie,$Categ,$Date,$Dat,$Produit,$Prod,$Annonceur,$Annon);
		}
	}	
}
?>


