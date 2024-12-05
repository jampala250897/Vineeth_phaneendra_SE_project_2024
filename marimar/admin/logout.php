<?php
require_once("../includes/initialize.php");

session_start();

foreach($_SESSION as $k => $v){
	unset($_SESSION[$k]);
}

 	

redirect(WEB_ROOT ."admin/index.php?logout=1");
?>