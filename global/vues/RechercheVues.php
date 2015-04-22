<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
	</head>


	<body>
	<div id='divGlobal'>
		<div id="rechercheOffre">
			<legend><h2> Recherchez une catégorie </h2></legend> 
			<form action='RecherchesOffres.php' class='Formulaire-recherche'method='POST'>
				<div class='form-title'>Catégories: 
				</div>
				<input class='form-field' type='text' name='catégories' /><br />
				<div class='form-title'>Fruits/Légumes: 
				</div>
				<input class='form-field' type='text' name='categorie-fruits' /><br />
				<div class='submit-container'>
				<input class='submit-button' id='submit-button-search' type='submit' value='rechercher' />				
				</div>
			</form>
		</div>

		<div id="MenuCentre">
			<h2 id='recherche-titre'> Nos catégories </h2>
			<ul class="MenuCategorie">
				<li ><a class="liste-categorie" href="#pepins">Fruits à pépins</a></li>
				<li ><a class="liste-categorie" href="#noyaux">Fruits à noyaux</a></li>
				<li ><a class="liste-categorie" href="#exotique">Fruits exotiques</a></li>
				<li ><a class="liste-categorie" href="#coque">Fruits à coques</a></li>
				<li ><a class="liste-categorie" href="#finesHerbes">Fines Herbes</a></li>
				<li ><a class="liste-categorie" href="#petitsFruits">Petits fruits</a></li>
				<li ><a class="liste-categorie" href="#baies">Baies</a></li>
				<li ><a class="liste-categorie" href="#légumes"> légumes</a></li>
			</ul>
		</div>
	</div>
	<div id="divOffre">
		<div class="image_offre" >
		<img src="vues/images/photo_framboise_thumb.png" alt="photo offre"/>
		</div>
			<div class="description_offre">	
			<h3 class="titre_offre"> Framboise </h3>
			<p class="paragraphe_offre"> Description rapide de l'annonce </br>
				Lieux/ville </br>
				Prix (en euros)
			</p>
		</div>

	</div>
	</body>
</html> 
