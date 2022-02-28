<!DOCTYPE html>
<html>
<head>
	<title>Login Successful</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


<?php
	$con = mysqli_connect("localhost", "root", "", "insertcode");

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

	$sql = "UPDATE login SET Password='$pass' WHERE Email='$mail'";

    $result = mysqli_query($con, $sql);

    if ($result == 1) {
        echo "<h1>Password Updated Successfully</h1>";
    }
    else {
        echo "<h1>Invalid Email or Password</h1>";
    }

    
?>

</body>
</html>