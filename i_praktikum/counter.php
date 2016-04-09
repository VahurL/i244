<?php
// Source: http://php.net/manual/en/function.file-put-contents.php
/*
	$file = 'count.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current++;
	// Write the contents back to the file
	file_put_contents($file, $current);
	// Prindime külastajate arvu
	print "Oled külastaja nr. " . $current;
*/
$sql = "SELECT id FROM 10153277_tabel ORDER BY id DESC LIMIT 1";

$result = $l->query($sql);
if (!$result)
	echo mysqli_error($l);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Oled külastaja nr: " . $row["id"];
    }
} else {
    echo "0 results";
}
//print "Oled külastaja nr. " . $current;
?>
