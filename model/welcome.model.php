<?php
	// Alle coole fancy dingen met betrekking op Databases in PHP
	// Vindt je hier: https://www.w3schools.com/php/php_mysql_prepared_statements.asp
	function openDb(){
		$servername = "localhost";
		$username = "root";
		$password = "Welkom!1";
		$dbname = "game_database";


   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

   		return $conn;
   	}
	

	function getGameList(){
		$conn = openDb();

		$stmt = $conn->prepare("SELECT * FROM games");
		$stmt->execute();

		return $stmt->fetchAll();
	}


?>