<?php
include('variables.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Vahur Lepvalts">
	<title>Praktikum 10-1</title>
	<style type="text/css">
		body {
			background-color: white;
			text-color: black;
		}
		
		#sisu {
			width: 500px;
			margin: 10px;
			padding: 5px;
			border-style: solid;
			border-color: black;
			border-width: 1px;
		}
		
		#user_input {
			width: 400px;
			height: 180px;
			padding: 10px;
			background-color: <?php echo $bg_color; ?>;
			color: <?php echo $text_color; ?>;
			font-size: <?php echo $text_size; ?>px;
			border-width: <?php echo $border_width; ?>px;
			border-style: <?php echo $border_style; ?>;
			border-color: <?php echo $border_color; ?>;
			border-radius: <?php echo $border_radius; ?>px;
		}
	</style>
</head>
<body>
	<div id="sisu">
		<div id="user_input"><?php echo $user_text; ?></div>
		<hr />
		
		<form method="post" action="10_1.php" id="UserForm">
		<textarea name="usertext" rows="4" cols="40"><?php echo $user_text; ?></textarea><br />
		<input type="color" name="bg_color" value="<?php echo $bg_color;?>">Taustavärv<br />
		<input type="color" name="text_color" value="<?php echo $text_color;?>">Tekstivärv<br />
		<input type="number" name="text_size" min="12" max="72" value="<?php echo $text_size; ?>">Teksti suurus (12-72px)<br><br />
		
		<fieldset>
			<legend>Piirjoon</legend>
			<input type="number" name="border_width" min="0" max="20" value="<?php echo $border_width; ?>"> Piirjoone laius (0-20px)<br>
			<select name="border_style">
				<option <?php if($_POST["border_style"] == "Solid") echo "selected"; ?>>Solid</option>
				<option <?php if($_POST["border_style"] == "Double") echo "selected"; ?>>Double</option>
				<option <?php if($_POST["border_style"] == "Dotted") echo "selected"; ?>>Dotted</option>
				<option <?php if($_POST["border_style"] == "Dashed") echo "selected"; ?>>Dashed</option>
				<option <?php if($_POST["border_style"] == "Groove") echo "selected"; ?>>Groove</option>
				<option <?php if($_POST["border_style"] == "Ridge") echo "selected"; ?>>Ridge</option>
				<option <?php if($_POST["border_style"] == "Inset") echo "selected"; ?>>Inset</option>
				<option <?php if($_POST["border_style"] == "Outset") echo "selected"; ?>>Outset</option>
				<option <?php if($_POST["border_style"] == "None") echo "selected"; ?>>None</option>
			</select>Piirjoone tüüp<br />
			
			<input type="color" name="border_color" value="<?php echo $border_color; ?>">Piirjoone värv<br>
			<input type="number" name="border_radius" min="0" max="100" value="<?php echo $border_radius; ?>">Piirjoone nurga raadius (0-100px)<br>
		</fieldset><hr />
	
		<input type="submit" name="submit" value="Esita">
		</form>
	</div>
</body>
</html>