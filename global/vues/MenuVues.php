<!DOCTYPE html>
<html>
	<style>
	a.fond
	{
	background-color: #B6D85A;
	padding: 1em;
	border-radius:1em;
	font-size: 1em;
	}
	</style>

	<body>

	<link type="text/css" rel="Stylesheet" href="vues/css/imageslidermaker.css" />
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="vues/js/bjqs-1.3-imageslidermaker.js"></script>
    <script>
      $(function() {
        $("#imageslider").bjqs({
          width: 760,
          height: 200,
          animtype: "slide",
          responsive: false,
          automatic: false,
          keyboardnav: false,
          markertype: "1",
          prevtext: "Prev",
          nexttext: "Next"
        });
      });
    </script>
            <section>
			<table class="tabAccueil">
                <tr>
					<td>
						<h1>Le paradis des légumes et des fruit!</h1>
					</td>
					<td>
						<h1>Les dernières annonces</h1>
					</td>
				</tr>
				<tr>
					<td>
						<article class="texte">
							Il vous manque un ingrédient pour vos repas ? Vous avez besoin d'un légume satisfaisant votre fine exigence ?
							Vous êtes à la bonne adresse. Sur ce site Internet vous pourrez échanger des légumes ou des fruits entre membres 
							priviligiés. Vous decouvrerez des vendeurs, ou des particuliers, prochent de chez vous afin que vos envies culinaires 
							soient rasasiées. Vous pourrez en temps que membre publiez les photographies et atout de vos propres légume afin de  
							les échanger avec notre communauté multiculturelle.
						</article>
					</td>
				<td>
					<div id="imageslider">
						<ul class="bjqs">
						<li class="slide-1">
					<div class="caption">Offre:</div>
						 <?php	
						 if(isset($Produit1) || isset($_SESSION['member'])){
						 echo"<a href='Produits.php?variable=".$Produit1."'><img src='vues/PhotoDeProduit/$URL1' width=750px height=400px/></a>";
						}
						else{
						 echo"Visualiser une offre dans le caroussel demande que vous soyez connecté,sinon cliquez sur <a class='fond' href= 'Recherche.php'> Voir les offres</a>";
						 echo"<img src='vues/css/images/slides/1.jpg' width=750px height=400px/>";		
						 }
						 ?>
						</li>
						<li class="slide-2">
					<div class="caption">Offre:</div>
						<?php	
						if(isset($Produit2) || isset($_SESSION['member'])){
						 echo"<a href='Produits.php?variable=".$Produit2."'><img src='vues/PhotoDeProduit/$URL2' width=750px height=400px/></a>";
						 }
						 else{
						 echo" Visualiser une offre dans le caroussel demande que vous soyez connecté,sinon cliquez sur <a class='fond' href= 'Recherche.php'> Voir les offres</a>";
						 echo"<img src='vues/css/images/slides/2.jpg' width=750px height=400px/>";	
						 }
						 ?>
						</li>
						<li class="slide-3">
					<div class="caption">Offre:</div>
						<?php	
						if(isset($Produit3) || isset($_SESSION['member'])){
						 echo"<a href='Produits.php?variable=".$Produit3."'><img src='vues/PhotoDeProduit/$URL3' width=750px height=400px/></a>";
						 }
						 else{
						 echo" Visualiser une offre dans le caroussel demande que vous soyez connecté,sinon cliquez sur <a class='fond' href= 'Recherche.php'> Voir les offres</a>";
						 echo"<img src='vues/css/images/slides/3.jpg' width=750px height=400px/>";		
						 }
						 ?>
						</li>
						<li class="slide-4">
					<div class="caption">Offre:</div>
						<?php	
						if(isset($Produit4) || isset($_SESSION['member'])){
						 echo"<a href='Produits.php?variable=".$Produit4."'><img src='vues/PhotoDeProduit/$URL4' width=750px height=400px/></a>";
						 }
						 else{
						 echo" Visualiser une offre dans le caroussel demande que vous soyez connecté,sinon cliquez sur <a class='fond' href= 'Recherche.php'> Voir les offres</a>";
						 echo"<img src='vues/css/images/slides/4.jpg' width=750px height=400px/>";		
						 }
						 ?>
						</li>
						<li class="slide-5">
					<div class="caption">Offre:></div>
						<?php
						if(isset($Produit5) || isset($_SESSION['member'])){	
						 echo"<a href='Produits.php?variable=".$Produit5."'><img src='vues/PhotoDeProduit/$URL5' width=750px height=400px/></a>";
						}
						else{
						 echo" Visualiser une offre dans le caroussel demande que vous soyez connecté,sinon cliquez sur <a class='fond' href= 'Recherche.php'> Voir les offres</a>";
						 echo"<img src='vues/css/images/slides/5.jpg' width=750px height=400px/>";	 
						 }
						 ?>
						</li>
						</ul>
					</div>	
				</td>
				</tr>
			</table>
       </section>
    </body>
</html>