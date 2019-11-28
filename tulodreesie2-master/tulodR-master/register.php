<?php include ('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="register.php">
	<?php include('errors.php');?>
	<div class="header">
		<h2>Register</h2>
	</div>
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $username ?>">
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="password" name="password" value="<?php echo $password_1 ?>">
	</div>
	<div class="input-group">
		<label>Confirm password:</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<label>Role:</label>
		<input type="text" name="role">
	</div>
	<div class="input-group">
		<label>Dated_created:</label>
		<input type="text" name="date_created">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>
		already a member? <a href="login.php">sign in</a>
	</p>
</form>
</body>
</html>