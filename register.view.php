<!DOCTYPE html>
<html>
<head>
	<title>Dashboard page</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">FLATICON</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="index.view.php">Home</a></li>
			<li><a href="dashboard.view.php">Dashboard</a></li>
				
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="#">Setting</a></li>
				<li><a href="logout.view.php">logout</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="mainlogin">
		<div class="container">
			<div class="login-heading well">
				<h4>Register</h4>
			</div>
		<div class="login-body">
			<div class="panel panel-default">
				
				<div class="panel-heading" style="text-align: center">
					All Fields are required 
				</div>
				<div class="panel-body">
				<div class="col-md-6">
					<img class="img-responsive" src="https://image.flaticon.com/share/flaticon-generic.jpg" alt="intro register image">
				</div>
				<div class="col-md-6">
					<form action="controller/regController.php" method="POST">

						<div class="form-group">
							
							<label for="username">Username:* </label>
							<input class="form-control" type="text" name="username" id="username" required>

						</div>
						<div class="form-group">
							
							<label for="password">Password:* </label>
							<input class="form-control" type="password" name="password" id="password" required="Password Field is required">

						</div>

						<div class="form-group">
							
							<label for="usertype">Usertype:* </label>
							<select name="usertype" class="btn btn-danger dropdown-toggle" required>
								<option value="Admin">Admin</option>
								<option value="User">User</option>
							</select>

						</div>

						<div class="form-group">
							
							<label for="status">Status:* </label>
							<input type="radio" name="status" value="active" id="status" checked>
							<input type="radio" name="status" value="inactive" id="stauts" checked>

						</div>
						
							<button type="submit" name="register" value="register">Register</button>
					</form>

				</div>
				
					
				</div>

			</div>
		</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

