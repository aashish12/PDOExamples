<?php
	session_start();
	
	if( isset($_SESSION['userdata'])){
	session_destroy();//whole session lae nai destroy garcha
	session_unset();//variable or session ko data haru lae remove garcha 
	header('Location: index.view.php');
}


?>