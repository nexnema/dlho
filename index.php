<?php
$sum = $_POST['num1'] + $_POST['num2'];

echo $_POST['mode'];
?>



<html>
	<body>
		<hr>
		<form action="" method="POST">
			<label>Num1: </label><input type="number" name="num1"><br>
			<label>num2: </label><input type="number" name="num2"><br>
			<hr>
			<input type="radio" id="input1" name="mode" value="+">
			<label for="input1">+</label>
			<br>
			<input type="radio" id="input2" name="mode" value="-">
			<label for="input2">-</label>
			<br>
			<input type="radio" id="input4" name="mode" value="*">
			<label for="input4">*</label>
			<br>
			<input type="radio" id="input3" name="mode" value="/">
			<label for="input3">/</label>
			<hr>
			<input type="submit">
		</form>
		<hr>
		<h1><?= $sum ?></h1>
	</body>
</html>

