<?php
	session_start();

	if(!isset($_SESSION['userdata'])){
		header('location: login.view.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashboard page</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php require_once('../layouts/navbar.view.php'); ?>

<div class="container">
	<h2>  Congratulation user you are logged in now! <?php echo $_SESSION['userdata']['username']; ?></h2>

	<p>To logout please click this button</p> <a href="logout.view.php"><button class="btn btn-default">Logout</button></a>

	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>