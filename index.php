<?php 
 
if ($_POST['username'] == admin) {
	if ($_POST['password'] == 1234) {
		$result = "welcome";
	} else {
		$result = "wrong password!!!";
	}
} else {
	$result = "Wrong Username!!!";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<label>Username: </label>
		<input type="text" name="username"><br>
		<label>password: </label>
		<input type="password" name="username"><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>