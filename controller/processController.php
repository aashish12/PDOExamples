<?php
session_start();
require_once('../models/users.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];


		$userobj = new users();

		$resdata = $userobj->login($username, $password);//login function le jahile pani if username and password millyo vanyo tyo user ko data return garcha 


		if($resdata['usertype'] === "admin"){

			$_SESSION['userdata']= array(
					'id' => $resdata['id'],//
					'username' =>$resdata['username']
				);

			header('location: ../view/frontend/dashboard.view.php');	

		}elseif($resdata['usertype'] === "user") {

			$_SESSION['userdata']= array(
					'id' => $resdata['id'],//
					'username' =>$resdata['username']
				);

			header('location: ../view/admin/dashboard.view.php');	

		}else{
			echo "no admin and user is detected";
		}

		

			
		

		

	}else{
		echo "no right coice";
	}


