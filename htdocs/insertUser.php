<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New User into Database</title>
</head>

<body>
<?php
	$connect = mysqli_connect("localhost", "root", "123456");
	mysqli_select_db($connect, "p3337");

	$insertUser = "insert into users values('" .
		$_POST["email"] .
		"', '" .
		_POST["password"] .
		"')";
	$result = mysqli_query($connect, $insertUser);

	header("Location: login.html");
	
?>
</body>
</html>