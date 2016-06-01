<?php

require_once('funk.php');
session_start();
connect_db();

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}

include_once('header.html');

switch($page){
	case "login":
		login();
	break;
	case "visits":
		visits();
	break;
	case "youngs":
		youngs();
	break;
	case "add_young":
		add_young();
	break;
	case "change_young":
		change_young();
	break;
	case "del_young":
		del_young();
	break;
	case "logout":
		logout();
	break;
	default:
		include_once('esileht.html');
	break;
}

include_once('footer.html');

?>