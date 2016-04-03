<?php
$var = "Karu oli siin!";
echo "<b>Õigetpidi:</b> ".$var."<br />";
$var_length = strlen($var);

for($i=$var_length;$i>-1;$i--){
	$reversed_var .= $var{$i};
}
echo "<b>Tagurpidi:</b> ".$reversed_var;
?>