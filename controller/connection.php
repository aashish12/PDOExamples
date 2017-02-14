<?php 
	session_start();
	
	class connection{
		public function dbConnect(){
			return new PDO("mysql:host=localhost; dbname=project", "root", "");	
		}
	}

?>