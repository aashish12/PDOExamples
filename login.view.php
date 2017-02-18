<?php
session_start();

	if(isset($_SESSION['userdata'])){
		header('location:dashboard.view.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page for simple login type project</title>
	<link href="css/style.css" rel="stylesheet">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<h2>Login Here</h2>

	
<div class="container">

		<div class="alert alert-success">
			<?php if($_GET['message']){
				echo $_GET['message'];
			}
				?>
		</div>
	<div class="row">

		<div class="col-md-6">
			<h2>This is Intro</h2>
		</div>

		
		<div class="col-md-6">	
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Login Form</h3>
				</div>

				<div class="panel-body">
					<form action="controller/processController.php" method="POST">

						<div class="form-group">					
							<label>Username: </label>
							<input class="form-control" type="text" name="username" id="username">
						</div>
						<br>

						<div class="form-group">
							<label>Password: </label>
							<input class="form-control" type="password" name="password" id="password">
						</div>
						<br>
						<button class="btn btn-danger" type="submit" name="submit" value="submit">Submit</button>


					</form>
				</div>
			</div>
		</div>

		</div>
	</div>

	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

