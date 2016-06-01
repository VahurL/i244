<?php

global $connection;
$first_name = mysqli_real_escape_string($connection, $_POST["firstname"]);
$last_name = mysqli_real_escape_string($connection, $_POST['lastname']);
$gender = mysqli_real_escape_string($connection, $_POST['gender']);
$birth_date = mysqli_real_escape_string($connection, $_POST['birthdate']);
$location = mysqli_real_escape_string($connection, $_POST['address']);
$phone_number = mysqli_real_escape_string($connection, $_POST['phone']);
$email_address = mysqli_real_escape_string($connection, $_POST['email']);

$first_name = input_control($first_name);
$last_name = input_control($last_name);
$gender = input_control($gender);
$birth_date = input_control($birth_date);
$location = input_control($location);
$phone_number = input_control($phone_number);



if (empty($first_name)) {
	$first_name_error = 'Eesnimi sisestamata.';
} else {
	$first_name = test_first_name($first_name);
	if ($first_name == FALSE) {
		$first_name_error = 'Eesnimi on vigane.';
	}
}

if (empty($first_name_error)) {
$sql = "INSERT INTO 10152993_young (eesnimi, perekonnanimi, sugu, synniaeg, elukoht, telefon, email, muudetud) VALUES ('$first_name', '$last_name', '$gender', '$birth_date', '$location', '$phone_number', '$email_address', NOW())";
if(mysqli_query($connection, $sql)){
	echo "Noor lisatud!";
} else {
	echo "VIGA! Ei saanud kasutajat lisada!";
	}
}
include_once('add_young.html');

function test_first_name($field) {
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))) {
        return $field;
    } else {
        return FALSE;
    }
}
?>