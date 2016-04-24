<?php

session_start();

require_once("head.html");

$pildid = array(
	array("link"=>"pildid/nameless1.jpg", "alt"=>"nimetu 1", "height"=>"100"),
	array("link"=>"pildid/nameless2.jpg", "alt"=>"nimetu 2", "height"=>"100"),
	array("link"=>"pildid/nameless3.jpg", "alt"=>"nimetu 3", "height"=>"100"),
	array("link"=>"pildid/nameless4.jpg", "alt"=>"nimetu 4", "height"=>"100"),
	array("link"=>"pildid/nameless5.jpg", "alt"=>"nimetu 5", "height"=>"100"),
	array("link"=>"pildid/nameless6.jpg", "alt"=>"nimetu 6", "height"=>"100")
);

if(isset($_GET['mode']) && $_GET['mode']!=""){
	$mode=htmlspecialchars($_GET['mode']);
} else {
   $mode="pealeht";
}
switch($mode){
	case "pealeht":
		include("pealeht.html");
		break;
	case "galerii":
		include("galerii.html");
		break;
	case "vote":
		if(!empty($_SESSION["voted_for"])){
					header("Location: kontroller.php?mode=tulemus");
					exit(0);
				} else {
					include("vote.html");
				}
			break;
	case "tulemus":
		include("tulemus.html");
		break;
	case "logout":
		$_SESSION = array();
		session_destroy();
		header("Location: kontroller.php?mode=pealeht");
		exit(0);
	default:
		include("pealeht.html");
		break;
}

require_once("foot.html");
?>