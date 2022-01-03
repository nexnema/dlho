<?php
$sum = $_POST['num1'] + $_POST['num2'];
?>



<html>
	<body>
		<hr>
		<form action="" method="POST">
			<label>Num1: </label><input type="number" name="num1"><br>
			<label>num2: </label><input type="number" name="num2"><br>
			<input type="submit">
		</form>
		<hr>
		<h1><?= $sum ?></h1>
	</body>
</html>

