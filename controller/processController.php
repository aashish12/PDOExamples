<?php
session_start();
require_once('../models/users.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$userobj = new users();

		$resdata = $userobj->login($username, $password);//login function le jahile pani if username and password millyo vanyo tyo user ko data return garcha 

		//print_r($resdata['id']);die();//$resdata['id'] = 1

		//now storing the user information into the session array variable

		
			$_SESSION['userdata']= array(
					'id' => $resdata['id'],//
					'username' =>$resdata['username'],
					'usertype' =>$resdata['usertype']
				);
		

		header('location: ../view/frontend/dashboard.view.php');

	}else{
		echo "no right coice";
	}


