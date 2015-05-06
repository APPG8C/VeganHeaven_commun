<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body><div style="margin: 5px 15px 0px 5px; text-align: justify;" id="faqs">
<h1 align="center">Questions fréquemment posées (FAQ)</h1>

<h3>Comment utiliser Veggan Heaven</h3>

<h4>Dois-je m'inscrire pour utiliser Veggan Heaven?</h4>
<p><br />
Oui et Non! Veggan Heaven est un site sur lequel on ne s'inscrit pas. On y va juste parce que l'on a envie de vendre ou d'échanger des légumes de son jardin ou bien pour acheter de bons produits de la terre près de chez soi.
</p>
<br />

<h4>Est- ce gratuit d'utiliser Veggan Heaven?</h4>
<p>Oui ! Veggan Heaven est un site entierement gratuit.</p>
<br />
<!--
<h4> J'ai déjà donné, mais je n'ai pas l'impression que le Bien est avec moi, que puis-je faire ?</h4>
<p>Il ne faut pas perdre la foi ! Peut-être votre générosité n'est pas à la hauteur du Bien que vous attendez. Ouvrez votre coeur.</p>
<br />
-->
<h4>Comment m'assurer que le fruit où le légumes proposé correspond à la réalité?</h4>
<p>Le bon fonctionnement du site repose sur l'honnêteté et la confiance entre utilisateurs. Les agriculteurs ou les particuliers qui proposent leurs produits sont notés puis classés en fonction des notes. Il est également possible de commenter après un échange ou un achat. </p>
<br />

<h4>Comment rechercher des annonces ? <h4>
<p> </p>
<br />

<h4>Comment répondre à une annonce qui me plaît ? <h4>
<p> </p>
<br />

<h3>Vendre, échanger, trouver ou acheter</h3>
<br />

<h4>Puis-je poster plusieurs annonces ? <h4>
<p> </p>

<h4>Combien de temps mon annonce reste-t-elle en ligne ? <h4>
<p> </p>

<h4>J'ai oublié mon mot de passe ? <h4>
<p> </p>

<h4>comment supprimer mon annonce ? <h4>
<p> </p>

<h4>comment supprimer mon annonce ? <h4>
<p> </p>

<h4>comment supprimer mon annonce ? <h4>
<p> </p>

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