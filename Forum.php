<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=site','root','');

if(!empty($_GET['page']) AND is_file('controleur/'.$_GET['page'].'php'))
{
	include('controleurs/ForumControleurs.php');
	include('vues/PiedDePage.php');	
}
else
{
	include('controleurs/ForumControleurs.php');
	include('vues/PiedDePage.php');	
}
?>