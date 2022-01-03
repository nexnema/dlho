<?php
echo $_GET['name'];
?>



<html>
	<body>
		<hr>
		<form action="index.php" method="GET">
			<label>Name: </label><input type="text" name="name"><br>
			<label>Age: </label><input type="number" name="age"><br>
			<input type="submit">
		</form>
	</body>
</html>

