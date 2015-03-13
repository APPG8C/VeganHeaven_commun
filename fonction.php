
<?php
function setTitle($page,$valeur,$texte){
	$page=$valeur;
	if ($valeur=true){
		echo"<title>$texte</title>";
	}
}
?>

<?php
function setPunchLine($page,$valeur,$texte1,$texte2){
	$page=$valeur;
	if ($valeur=true){
		
		echo"<header class='header'><h1 class='adresse'>$texte1</h1></header>";
		echo"<header class='header'><h2 class='slogan'>$texte2</h2></header>";
		
		
	}
}
?>
