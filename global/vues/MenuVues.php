<!DOCTYPE html>
<html>
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
            <h1>Bienvenue au paradis des légumes et des fruit!</h1>
            <p class="dessous" class="1">
                <article>
                Il vous manque un ingrédient pour vos repas ? Vous avez besoin d'un légume satisfaisant votre fine <mark>exigence</mark> ?
                Vous êtes à la bonne adresse. Sur ce site Internet vous pourrez échanger des légumes ou des fruits entre membres 
                priviligiés. Vous decouvrerez des vendeurs, ou des particuliers, prochent de chez vous afin que vos envies culinaires 
                soient rasasiées. Vous pourrez en temps que membre publiez les photographies et atout de vos propres légume afin de  
                les échanger avec notre communauté multiculturelle.
            </p>
            </section>
			<h1>Les dernières annonces</h1>
			<div id="imageslider">
				<ul class="bjqs">
					<li class="slide-1">
					<div class="caption">Offre 1</div>
					</li>
					<li class="slide-2">
					<div class="caption">Offre 2</div>
					</li>
					<li class="slide-3">
					<div class="caption">Offre 3</div>
					</li>
					<li class="slide-4">
					<div class="caption">Offre 4<div>
					</li>
					<li class="slide-5">
					<div class="caption">Offre 5</div>
					</li>
				</ul>
        </div>
    </body>
</html>