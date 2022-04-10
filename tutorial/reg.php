<?php

include("connections.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
    $query= "insert into user (name,username,password) values ('$name','$username','$password')";
    $count = insert($query);
       if($count == 1)
       {
       	  header("Location: index.php");
		  exit();
       }

}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regestration</title>
</head>
<body>
	<h1>Regestration</h1>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Name"> <br> <br>
		<input type="text" name="username" placeholder="Username"> <br> <br>
		<input type="password" name="password" placeholder="Password"> <br> <br>
		<input type="submit" name="" value="Signup">
	</form>

</body>
</html>
