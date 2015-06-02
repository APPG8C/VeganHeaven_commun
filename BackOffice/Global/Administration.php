<?php
	$connection=session_start();
	if(!$connection)
	{
	session_start();
	}
	if(!isset($_SESSION['ID']))
	{
	include('Controleurs/AdministrationControleurs.php');
	}
	if (isset ($_GET['page'])) {
		
		$donnee=$_GET['page'];
		$page=htmlspecialchars($donnee);
	
			if($page=='Deconnexion')
			{
			$_SESSION = array();
			session_destroy();
			include('Controleurs/AdministrationControleurs.php');
			}
			if(isset($_SESSION['ID']))
			{
			include('commun/Onglet.php');
				
				if($page=='Accueil')
				{
				include('Controleurs/GererMembreControleurs.php');	
				}
				if($page=='GererAnnonces')
				{
				include('Controleurs/GererAnnoncesControleurs.php');	
				}
				if($page=='GererMembre')
				{
				include('Controleurs/GererMembreControleurs.php');	
				}
				if($page=='GererTransaction')
				{
				include('Controleurs/GererTransactionControleurs.php');	
				}
				if($page=='GererForum')
				{
				include('Controleurs/GererForumControleurs.php');	
				}
				if($page=='GererMessageForum')
				{
				include('Controleurs/GererMessageForumControleurs.php');	
				}
			include('Commun/BasDePage.php');
			}
			
		
	}

?>