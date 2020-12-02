<?php


	function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

?>