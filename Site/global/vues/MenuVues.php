<style>
a.fond
{
background-color: #B6D85A;
padding: 1em;
border-radius:1em;
font-size: 1em;
}
</style>
<link type="text/css" rel="Stylesheet" href="vues/css/carousel.css" />
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet" type="text/css">

 <section class="sectionAccueil">
        
		<h1 id='titreCaroussel'> Les annonces du moment</h1>
			<div id="imageslider">
				<ul class="bjqs">
				<li class="slide-1">
				<?php	
				 carroussel();
				 ?>
				</li>
				<li class="slide-2">
				<?php	
				 carroussel();
				 ?>
				</li>
				<li class="slide-3">
				<?php	
				 carroussel();
				 ?>
				</li>
				<li class="slide-4">
				<?php	
				 carroussel();
				 ?>
				</li>
				<li class="slide-5">
				<?php	
				 carroussel();
				 ?>
				</li>
				</ul>
			</div>	
	<table class="tabAccueil2">
		<tr>
			<td>
				<div class='caseMenu'>
				<h1>le Paradis des fruits et des légumes</h1>
					<p class='paragraphe'>
						Il vous manque un ingrédient pour vos repas ? Vous avez besoin d'un légume satisfaisant votre fine exigence ?
						Vous êtes à la bonne adresse. Sur ce site Internet vous pourrez échanger des légumes ou des fruits entre membres 
						priviligiés. Vous decouvrerez des vendeurs, ou des particuliers, prochent de chez vous afin que vos envies culinaires 
						soient rasasiées. Vous pourrez en temps que membre publiez les photographies et atouts de vos propres légumes afin de  
						les échanger avec notre communauté multiculturelle.
					</p>
				</div>
			</td>

			<td>
				<div class='caseMenu'>
					<h1 > Nos Produits </h1>
					<a href='globalControleur.php?page=Recherche'> <img  src="vues/images/NosProduits.jpg" width='85%' height='85%'>
				</div>
			</td>
		</tr>
		<tr>
			<td> 
				<h1>Des questions?</h1>
				<a href='globalControleur.php?page=Forum'> <img  src="vues/images/NosMembres.gif" width='70%' height='70%'>
			</td>
			<td>
				<div class='caseMenu'>
					<h1 > Qui sommes-nous?</h1>
					<p class='paragraphe'> Nous sommes une organisation à but non lucratif qui à pour objectif de reunir des petits producteurs et autres 
						amateurs de bon produits bio. Pour qu'ils puissent acheter, échanger ou vendre leurs produits 
						qu'ils cultivent eux-memes. Pour pouvoir avoir accès à tout le contenus et les différents modules du site
						nous vous invitions fortement à devenir membre de notre communauté en vous inscrivant. Enjoy!

					</p>
				</div>
			</td>
		</tr>
	</table>
</section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="vues/js/carousel.js"></script>
<script>
$(function() {
$("#imageslider").bjqs({
  width: 760,
  height: 200,
  animtype: "slide",
  responsive: true,
  automatic: false,
  keyboardnav: false,
  markertype: "1",
  prevtext: "Prev",
  nexttext: "Next"
});
});
</script>
