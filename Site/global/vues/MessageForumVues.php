
<?php
if(isset($_GET['titreTopic']))
{	
		$titreTopic=$_GET['titreTopic'];
		echo"<h1 id='titre_msg_forum'>Topic: $titreTopic</h1>";
}
?>
<div id='divForumGlobal'>
	
<?php
	if(isset($_GET['idTopic']) AND isset($_GET['titreTopic']))
	{	
		$titreTopic=$_GET['titreTopic'];
		$idTopic=$_GET['idTopic'];
		
		SelectIdMessage($idTopic,$titreTopic);

	}
	?>
	<?php 
	if(isset($_GET['idTopic']) AND isset($_GET['titreTopic']))
	{	
	$idTopic=$_GET['idTopic'];
	$titreTopic=$_GET['titreTopic'];
		echo"<form class='FormMessageForum' action='globalControleur.php?page=MessageForum&amp;idTopic=".$idTopic."&amp;titreTopic=".$titreTopic."'method='POST'>
				<label id='titreMsgForum'> Ecrivez un message: </br>
					</br>
					<textarea id='textareaForum' type='longtext' name='ContenuMsgForum'></textarea>
				</label>
				<p><input type='submit'class='submit-button'value='Valider'/></p>
			</form>";
	}
	else
	{
	echo"<form class='FormMessageForum' action='MessageForum.php' method='POST'>
				<label id='titreMsgForum'> Ecrivez un message: </br>
					</br>
					<textarea id='textareaForum' type='longtext' name='ContenuMsgForum'></textarea>
				</label>
				<p><input type='submit'class='submit-button'value='Valider'/></p>
			</form>";	
	}

	?>
</div>
	
