


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body><div style="margin: 5px 15px 0px 5px; text-align: justify;" id="faqs">
<h1 align="center">Questions fréquemment posées (FAQ)</h1>

<h3>Comment utiliser Veggan Heaven</h3>
<br />


	<h4>Dois-je m'inscrire pour utiliser Veggan Heaven? </h4>
		<p>
			Sur Veggan Heaven vous avez la possibilité de trouver des fruits et des légumes frais près de chez vous en toute simplicité de ce fait vous pouvez effectuer des recherches sur le site sans avoir besoin de vous inscrire. Si une offre correspond à vos envies vous allez alors avoir besoin de vous créer un compte pour pouvoir entrer en contact avec le vendeur.
		</p>
		<br />

	<h4>Est- ce gratuit d'utiliser Veggan Heaven? </h4>
		<p>Oui ! Veggan Heaven est un site entièrement gratuit. </p>
		<br />

	<h4> Puis-je contacter l'équipe Veggan Heaven ?</h4>
		<p>
			Oui ! Vous pouvez tout à fait nous envoyer un message ou une remarque. Il vous suffit d'aller dans « Contact » pour nous envoyer toutes vos remarques et suggestions quant à l'utilisation de Veggan Heaven ! Nous vous répondrons le plus rapidement possible.
		</p>
		<br />

	<h4>Comment m'assurer que le fruit où le légumes proposé correspond à la réalité?</h4>
		<p>
			Le bon fonctionnement du site repose sur l'honnêteté et la confiance entre utilisateurs. Les agriculteurs ou les particuliers qui proposent leurs produits sont notés puis classés en fonction des notes. Il est également possible de commenter après un échange ou un achat. 
		</p>
		<br />

	<h4> Comment sont classés les produits ? </h4>
		</p>
		Sur Vegan Heaven les produits sont classés selon leurs disponibilités, si un utilisateur met en ventes un fruit ou un légume il sera disponible dans la barre de recherche. Grace à ce principe vous pouvez alors directement connaitre les produits disponibles et ainsi éviter les recherches inutiles
		<br />

	<h4>Comment rechercher des annonces ? </h4>
		<p>
			Pour rechercher une annonce il vous suffit de cliquer sur l’onglet annonce et d’ensuite indiquer le type de transaction le type de produit et ensuite le produit recherché, vous avez la possibilité d’affiner la recherche en spécifiant la quantité voulu, la date de péremption ou simplement de faire une recherche par annonceurs si vous voulez spécifiquement des produits d’un membre en particulier
 		</p>
		<br />

	<h4>Comment répondre à une annonce qui me plaît ? </h4>
		<p> 
			Sur la page de l’annonce vous avez la possibilité d’ajouter le produit à votre panier, ceci à pour effet d’envoyer un mail à l’annonceur qui lui indique que vous seriez intéressé par son produit. Vous avez donc tous les deux la possibilité d’entrer en contact car l’annonceur aura accès à votre profil suivant un lien  
		</p>
		<br />



<h3>Vendre, échanger, trouver ou acheter</h3>
<br />

	<h4>Puis-je poster plusieurs annonces ? </h4>
		<p> 
			Oui ! Il est tout à fait possible de poster plusieurs annonces en même temps sur le site.
		</p>
		<br />


	<h4>comment créer son annonce ? </h4>
		<p> 
			Il faut tout d’abord être connecté sur Veggan Heaven ensuite cliquer sur le lien « créer son offres » dans le menu déroulant de l’onglet annonce. Une fois cette étape franchi vous allez devoir en tout simplicité remplir tous les champs et cliquer sur validé
		</p>
		<br />


	<h4>Combien de temps mon annonce reste-t-elle en ligne ? </h4>
		<p>
			Il n’y a pas de limite de temps pour la disponibilité de votre annonce, il en va de la responsabilité de l’annonceur de retirer son annonce lorsque que la date de péremption de son produit est atteinte. 
		</p>
		<br />


	<h4>comment supprimer mon annonce ? </h4>
		<p>
			Il faut pour se faire vous dirigé sur votre profil et indiqué que votre offre est réalisée, cela aura pour effet de retirer votre annonce du site. 
		</p>
		<br />



</div>
<br />
<br />

<center><a href="#" onClick="faq_toggle_all('block')"><small>Tout afficher</small></a> | <a href="#" onClick="faq_toggle_all('none')"><small>Tout masquer</small></a> </center>

</body>
<script type="text/javascript">
function faq_toggle(pdiv) {
var action = (pdiv.style.display == "block") ? "none" : "block";
pdiv.style.display = action;
}
function faq_toggle_all(action) {
var faqs = document.getElementById('faqs');
var pfaqs = faqs.getElementsByTagName('p');
for(i=0;i<pfaqs.length;i++) {
pfaqs[i].style.display=action;
}
}

var faqs = document.getElementById('faqs');
var pfaqs = faqs.getElementsByTagName('p');
var hfaqs = faqs.getElementsByTagName('h4');
for(i=0;i<pfaqs.length;i++) {
//hfaqs[i].setAttribute("onclick","faq_toggle(pfaqs["+i+"])"); // Does not work in IE.
hfaqs[i].onclick = function(){
var faqs = document.getElementById('faqs');
var pfaqs = faqs.getElementsByTagName('p');
var hfaqs = faqs.getElementsByTagName('h4');
for(j=0;j<hfaqs.length;j++) {
if(hfaqs[j] === this) {
faq_toggle(pfaqs[j]);
}
}
}
hfaqs[i].style.fontStyle="italic";
hfaqs[i].style.cursor="pointer";
hfaqs[i].style.color="#B6D85A";
pfaqs[i].style.display="none";
}
</script>
</html>