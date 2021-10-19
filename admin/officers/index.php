<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Officers"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'officers.php';		
		break;

	default :
		$content    = 'officers.php';		
}
require_once ("../templates/template.php");
?>