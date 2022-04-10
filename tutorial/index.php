<?php


include("connections.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$data = rows("select * from user where username='$username' && password='$password'");
	if($data == 1)
	{
		header("Location: profile.php");
		exit();
	}
	else
	{
		echo "Invalid credential!";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="" method="post">
		<input type="text" name="username" placeholder="Username"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" value="Login">
	</form>

</body>
</html>
