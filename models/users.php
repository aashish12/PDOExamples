<?php
session_start();

	require_once('../controller/connection.php');

	class users{
		
		private $db;//reference variable

		function __construct(){
			$this->db = new connection();
			$this->db = $this->db->dbConnect();
		}

		public function login($username, $password){

			$stmt = $this->db->prepare("select * from users where username=:uname and password=:pass");

			$stmt->bindParam(':uname', $username);
			$stmt->bindParam(':pass', $password);

			$stmt->execute();

			$results = $stmt->fetch();//single data taneko 

			return $results;
		}

		public function registerUser($username, $password, $usertype, $status){
			$stmt = $this->db->prepare("insert into users(username, password, usertype, status) values 
				(?,?,?,?)");	
			$stmt->bindParam(1, $username);		
			$stmt->bindParam(2, $password);
			$stmt->bindParam(3, $usertype);
			$stmt->bindParam(4, $status);

			$stmt->execute();

			$results = $stmt->fetch();

			return $results;
		}
	}

