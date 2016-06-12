<?php

$cookie_name = "10152993_eksam_ip";
$cookie_value = "Visitor";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

include_once('connection.php');
session_start();
connect_db();

echo "<p>Sinu IP aadress: ".$_SERVER['REMOTE_ADDR']."</p>";

$ip = $_SERVER['REMOTE_ADDR'];
global $connection;
$add_ip = "INSERT INTO 10152993_eksam_ip (ip, datetime) VALUES ('$ip', NOW())";


if(!isset($_COOKIE[$cookie_name])) {
	if(mysqli_query($connection, $add_ip)){
		echo "";
		} else {
		echo "VIGA! Ei saanud aadressi andmebaasi lisada!";}
		echo "Tere uus külastaja!<br />";
	} else {
	echo "Tere tulemast tagasi!<br />";
}

$count = "SELECT id FROM 10152993_eksam_ip ORDER BY id DESC LIMIT 1";

$result = $connection->query($count);
if (!$result)
	echo mysqli_error;


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Oled külastaja nr: " . $row["id"];
    }
} else {
    echo "Külastajaid pole!";
}

/*
Unikaalsete IP-de loendamine, kahjuks jäin jänni millegipärast ei saanud arvulist tulemust kuvama
$unique = mysql_query("SELECT COUNT(DISTINCT(ip)) FROM 10152993_eksam_ip");
*/

?>