<?php
// Source: http://php.net/manual/en/function.file-put-contents.php

	$file = 'count.txt';
	// Open the file to get existing content
	$current = file_get_contents($file);
	// Append a new person to the file
	$current++;
	// Write the contents back to the file
	file_put_contents($file, $current);
	// Prindime külastajate arvu
	print "Oled külastaja nr. " . $current;
?>