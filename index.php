<!DOCTYPE html>
<html>

<head>
	<title>Login Demo</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div>

		<h1>Login Page</h1>

		<form method="POST" action="log_in.php">

			<label>Email</label>
			<input type="email" name="mail" required><br>

			<label>Password</label>
			<input type="password" name="pass" required><br>

			<input type="submit" value="Log In">

		</form>

	</div>

	<br><br>

	<hr width="60%">

	<br><br>

	<div>

		<h1>Change Password</h1>

		<form method="POST" action="updatePass.php">

			<label>Email</label>
			<input type="email" name="mail" required><br>

			<label>Password</label>
			<input type="password" name="pass" required><br>

			<input type="submit" value="Change Password">

		</form>

	</div>


</body>

</html>