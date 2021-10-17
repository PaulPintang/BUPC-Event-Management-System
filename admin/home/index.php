<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Student"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'users.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;

	default :
		$content    = 'users.php';		
}
require_once ("../templates/template.php");
?>