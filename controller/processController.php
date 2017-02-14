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
		

		header('location: ../dashboard.view.php');

	}else{
		echo "no right coice";
	}

///inserting new user to the database 

	if(isset($_POST['register'])){

		echo "hellp";
		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$status = $_POST['status'];

		var_dump($username, $password, $usertype, $status);die();
		
		$userobj = new users();

		$resdata = $userobj->registerUser($username, $password, $usertype, $status);

		//print_r($resdata);die();

		//now storing the user information into the session array variable

		if($resdata){
			$_SESSION['userdata']= array(
			'id' => $resdata['id'],
			'username' =>$resdata['username'],
			'usertype' =>$resdata['usertype']
			);
			// header('location: ../dashboard.view.php');			
		}else{
			echo "NO data is been saved";				
		}

	}else{
		echo "no right coice";
	}

