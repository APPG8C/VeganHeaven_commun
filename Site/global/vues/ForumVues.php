
<h1 id='titre_forum'> Forum </h1>
<?php
if(isset($_SESSION['member']))
{
echo"<form class='FormMessageForum'action='globalControleur.php?page=Forum' method='POST'enctype='multipart/form-data'>
			<!--<legend><h3 id='titreMsgForum'>Publier votre Message</h3></legend>-->
			<label id='titreMsgForum'> Ecrivez le titre de votre topic: </br>
			</br>
				<textarea id='textareaForum' type='text' name='titreTopic'></textarea>
			</label>
			<p><input type='submit'class='submit-button'value='Valider'/></p>
</form>
<h2 id='titre_topic'> Topic </h1>";
}
 CreationUrlTopic(1); 
?>
	

