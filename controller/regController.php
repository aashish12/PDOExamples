<?php

require_once('../models/users.php');

	if($_POST['submit']){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$status = $_POST['status'];

		// var_dump($username, $password, $usertype, $status);die();
		
		$userobj = new users();

		$resdata = $userobj->registerUser($username, $password, $usertype, $status);

		// print_r($resdata);

		//now storing the user information into the session array variable

		if($resdata = true){
			header('location: ../dashboard.view.php');			
		}else{
			echo "NO data is been saved";				
		}

	}else{
		echo "no right coice";
	}
