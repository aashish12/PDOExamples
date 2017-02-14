<!DOCTYPE html>
<html>
<head>
	<title>Login Page for simple login type project</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<h2>Login Here</h2>
	
	<div class="mainlogin">
		<div class="login-heading">
			Register
		</div>
		<div class="login-body">
			<form action="helper/process.php" method="POST">

				<label>Username: </label>
				<input type="text" name="username" id="username">
				<br><br>
				<label>Password: </label>
				<input type="password" name="password" id="password">
				<br><br>
				<label>Usertype: </label>
				<select name="usertype">
					<option value="Admin">Admin</option>
					<option value="User">User</option>
				</select>
				<br><br>
				<label>Status: </label>
				<input type="radio" name="status" value="active" id="status" checked>
				<input type="radio" name="status" value="inactive" id="stauts" checked>
				<br><br>
				<button type="submit" name="submit" value="register">Register</button>


			</form>
		</div>
	</div>
</body>
</html>

