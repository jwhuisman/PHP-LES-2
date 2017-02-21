<?php
	
	require(_ROOT_ . "/model/welcome.model.php");

	$gamelist = getGameList();

	require(_ROOT_ . "/view/welcome.view.php");

?>