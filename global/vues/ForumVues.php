<!DOCTYPE html>
<html>
	<h1 id='titre_forum'> Forum </h1>

	<form class="FormMessageForum" action="Forum.php" method="POST"enctype="multipart/form-data">
				<!--<legend><h3 id="titreMsgForum">Publier votre Message</h3></legend>-->
				<label id='titreMsgForum'> Ecrivez le titre de votre topic: </br>
				</br>
					<textarea id='textareaForum' type='text' name='titreTopic'></textarea>
				</label>
				<p><input type="submit"class="submit-button"value="Valider"/></p>
	</form>
	<h2 id='titre_topic'> Topic </h1>
	<?php CreationUrlTopic(1); ?>
	

</html>