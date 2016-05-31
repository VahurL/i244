<?php

include_once('conn.php');

function login(){
	global $connection;
	if(!empty($_SESSION["username"])) {
		header("Location: ?page=visits");
	} else {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			if($_POST["password"] == '' || $_POST["username"] == '') {
				$errors =array();
				if(empty($_POST["username"])) {
					$errors[] = "Sisestage palun kasutajanimi!";
				}
				if(empty($_POST["password"]))
				$errors[] = "Sisestage palun parool!";
				} else {
				$kasutaja = mysqli_real_escape_string ($connection, $_POST["username"]);
				$parool = mysqli_real_escape_string ($connection, $_POST["password"]);
				$sql = "SELECT id FROM 10152993_kylastajad WHERE username='$kasutaja' AND passw=SHA1('$parool')";
				$result = mysqli_query($connection, $sql);
				$row = mysqli_num_rows($result);
				if($row) {
					$_SESSION["username"] = $_POST["username"];
					header("Location: ?page=visits");
				} else {
					header("Location: ?page=login");
				}
			}
			}
		}
	include_once('login.html');
}

function logout(){
	$_SESSION=array();
	session_destroy();
	header("Location: ?");
}

function visits(){
	if (!isset($_SESSION['username'])) {
		header("Location: index.php?page=login");
	} else {
		include_once('visits.html');
	}
}

function youngs(){
	if (!isset($_SESSION['username'])) {
		header("Location: index.php?page=login");
	} else {
		global $connection;
		include_once('youngs.html');
	}
}

function add_young(){
	if (!isset($_SESSION['username'])) {
		header("Location: index.php?page=login");
	} else {
		if(isset($_POST['add'])) {
			global $connection;
			$first_name = mysqli_real_escape_string($connection, $_POST['firstname']);
			$last_name = mysqli_real_escape_string($connection, $_POST['lastname']);
			$birth_date = mysqli_real_escape_string($connection, $_POST['birthdate']);
			$location = mysqli_real_escape_string($connection, $_POST['address']);
			$phone_number = mysqli_real_escape_string($connection, $_POST['phone']);
			
			$sql = "INSERT INTO 10152993_young (eesnimi, perekonnanimi, synniaeg, elukoht, telefon, muudetud) VALUES ('$first_name', '$last_name', '$birth_date', '$location', '$phone_number', NOW())";
			if(mysqli_query($connection, $sql)){
				echo "Noor lisatud!";
			} else {
				echo "VIGA! Ei saanud kasutajat lisada: $sql. " . mysqli_error($connection);
				}
			include_once('add_young.html');
			} else {
				include_once('add_young.html');
			}
	}
}

?>