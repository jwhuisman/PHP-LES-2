<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dit is een titel van een mooie pagina</title>
</head>
<body>
	<p>Hier staat wat nutteloze tekst Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolorum unde officia quam quis, iusto quaerat odio, delectus cum doloribus iste harum vitae assumenda fugiat debitis. Vel, eligendi distinctio explicabo.</p>

	<ul>
		<?php 
			foreach($gamelist as $game){
		?>
				<li><?php echo $game["name"]?></li>
		<?php
			}
		?>
	</ul>
</body>
</html>