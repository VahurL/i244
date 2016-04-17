<?php
require_once('head.html');

$pildid = array(
	array("link"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1", "height"=>"100"),
	array("link"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2", "height"=>"100"),
	array("link"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3", "height"=>"100"),
	array("link"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4", "height"=>"100"),
	array("link"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5", "height"=>"100"),
	array("link"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6", "height"=>"100")
);


?>

<h3>Vali oma lemmik :)</h3>
<form action="tulemus.php" method="GET">
<?php
$counter = 1;
	foreach($pildid as $pilt):
		echo '<p>';
		echo '<label for="p'.$counter.'">';
		echo '<img src="'.$pilt['link'].'" alt="'.$pilt['alt'].'" height="'.$pilt['height'].'" />';
		echo '</label>';
		echo '<input type="radio" value="'.$counter.'" id="'.$counter.'" name="pilt" />';
		echo "</p> \n";
		$counter++;
	endforeach;
?>
<br/>
<input type="submit" value="Valin!"/>
</form>

<?php require_once('foot.html'); ?>