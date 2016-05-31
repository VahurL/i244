<?php
	function connect_db(){
		global $connection;
		$host="localhost";
		$user="test";
		$pass="t3st3r123";
		$db="test";
		$connection = mysqli_connect($host, $user, $pass, $db) or die("Ühendus andmebaasiga puudub! ".mysqli_error());
		mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi UTF-8-sse - ".mysqli_error($connection));
	}
?>