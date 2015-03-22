<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=site','root','');

if(!empty($_GET['page']) AND is_file('controleur/'.$_GET['page'].'php'))
{
	include('controleurs/FAQControleurs.php');
	include('vues/PiedDePage.php');	
}
else
{
	include('controleurs/FAQControleurs.php');
	include('vues/PiedDePage.php');	
}
?>