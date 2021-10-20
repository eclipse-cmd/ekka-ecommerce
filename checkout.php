<?php 
require_once('./config/root.php');

$isAuth = $GLOBALS['isAuthenticated'];

if ($isAuth !== true) {
	header("Location: ./login.php");
}
 ?>