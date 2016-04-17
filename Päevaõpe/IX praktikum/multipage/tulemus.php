<?php require_once('head.html');

if(!empty($_GET)){
	$errors = array();
	if(!empty($_GET["pilt"])) {
		$errors[] = "Sinu lemmik oli pilt nr. ".$_GET["pilt"]."<br />Aitäh, et tegid oma valiku!";
	}
} else {
	$errors[] = "Palun vali oma lemmik!";
}

echo "<h3>Valiku tulemus</h3>";

if(!empty($errors)):
	foreach($errors as $teade):
		echo '<p style="color:red">'.$teade.'</p>';
	endforeach;
endif;

require_once('foot.html'); ?>