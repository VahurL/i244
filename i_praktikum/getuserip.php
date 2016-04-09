<?php
$ip=$_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO 10153277_tabel (ip) VALUES ('$ip')";

if ($l->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $l->error;
}

mysqli_close($l);
?>
