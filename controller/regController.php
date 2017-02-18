<?php

require_once('../models/users.php');


	if(isset($_POST['register'])){

		echo "inside reg controller inside if condition";

		$username = $_POST['username'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];
		$status = $_POST['status'];

		$datas = array('username'=> $username, 'password' => $password, 
				'usertype' => $usertype, 'status' => $status);

		// print_r($datas);die();

		$userobj = new users();

		$resdata = $userobj->registerUser($datas);


		if($resdata === "success"){
			// echo "data inserted so go to dashboard now";
			//$_SESSION['success_message'] = ['message' => 'one user is recorded successfully'];
			header('location: ../login.view.php?message=one user is recorded successfully');
				

		}else{
			echo "No data is been saved";				
		}

	}else{
		echo "There no any data from view";
	}
