<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Student"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'reports.php';		
		break;

	default :
		$content    = 'reports.php';		
}
require_once ("../templates/template.php");

?>