<?php
	$user_text="Siia tuleb kasutaja tekst";
	if (isset($_POST['usertext']) && $_POST['usertext']!="") {
 	  $user_text=htmlspecialchars($_POST['usertext']);
	}
	$bg_color="#000000";
	if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
		$bg_color=htmlspecialchars($_POST['bg_color']);
	}
	$text_color="#FFFFFF";
	if (isset($_POST['text_color']) && $_POST['text_color']!="") {
		$text_color=htmlspecialchars($_POST['text_color']);
	}
	$text_size="18";
	if (isset($_POST['text_size']) && $_POST['text_size']!="") {
 	  $text_size=htmlspecialchars($_POST['text_size']);
	}
	$border_width='5';
	if (isset($_POST['border_width']) && $_POST['border_width']!="") {
 	  $border_width=htmlspecialchars($_POST['border_width']);
	}
	$border_style='solid';
	if (isset($_POST['border_style']) && $_POST['border_style']!="") {
 	  $border_style=htmlspecialchars($_POST['border_style']);
	}
	$border_color='#FF0000';
	if (isset($_POST['border_color']) && $_POST['border_color']!="") {
 	  $border_color=htmlspecialchars($_POST['border_color']);
	}
	$border_radius='0';
	if (isset($_POST['border_radius']) && $_POST['border_radius']!="") {
 	  $border_radius=htmlspecialchars($_POST['border_radius']);
	}
?>