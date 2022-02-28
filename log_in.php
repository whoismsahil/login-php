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

	$sql = "SELECT * FROM login WHERE Email='$mail' AND Password='$pass'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Valid";
        header('location: welcome.php');
    }
    else {
        echo "<h1>Invalid Email or Password</h1>";
    }

    
?>

</body>
</html>