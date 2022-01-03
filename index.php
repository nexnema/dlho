<?php
echo $_POST['num1'] + $_POST['num2'];
?>



<html>
	<body>
		<hr>
		<form action="index.php" method="POST">
			<label>Num1: </label><input type="number" name="num1"><br>
			<label>num2: </label><input type="number" name="num2"><br>
			<input type="submit">
		</form>
	</body>
</html>

