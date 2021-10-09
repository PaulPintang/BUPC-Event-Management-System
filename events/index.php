<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Student"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'logs.php';		
		break;

	default :
		$content    = 'logs.php';		
}
require_once ("../templates/template.php");
?>