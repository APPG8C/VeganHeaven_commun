<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="StyleGraphique.css" />
	</head>


	<body>
		<div id='divGlobal'>
		<div id="rechercheOffre">
			<legend><h2> Recherchez une catégorie </h2></legend> 
			<form action="vuesOffres" method="POST">
				<label> Catégorie: <input type="text" name="categorie"/>
					<p><input type="submit"class="SearchControls"/></p>
				</label>
				<label> fruit: <input type="text" name="searchFruits"/>
					<p><input type="submit"class="SearchControls"/></p>
				</label>
				<label> légumes: <input type="text" name="searchLegumes"/>
					<p><input type="submit"class="SearchControls"/></p>
				</label>
				
                </form>
		</div>

		<div id="MenuCentre">
			<h2> Nos catégories </h2>
			<ul class="MenuCategorie">
				<li class="liste"><a href="#pepins">Fruits à pépins</a></li>
				<li class="liste"><a href="#noyaux">Fruits à noyaux</a></li>
				<li class="liste"><a href="#exotique">Fruits exotiques</a></li>
				<li class="liste"><a href="#coque">Fruits à coques</a></li>
				<li class="liste"><a href="#finesHerbes">Fines Herbes</a></li>
				<li class="liste"><a href="#petitsFruits">Petits fruits</a></li>
				<li class="liste"><a href="#baies">Baies</a></li>
				<li class="liste"><a href="#légumes"> légumes</a></li>
			</ul>
		</div>

	</div>

	</body>
</html>