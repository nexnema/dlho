<?php

if ($_POST['mode'] == "111") {
	$result = $_POST['num1'] + $_POST['num2'];
}
if ($_post['mode'] == "222") {
	$result = $-_post['num2'] - $_post['nu2']
}
?>



<html>
	<body>
		<hr>
		<form action="" method="POST">
			<label>Num1: </label><input type="number" name="num1"><br>
			<label>num2: </label><input type="number" name="num2"><br>
			<hr>
			<input type="radio" id="input1" name="mode" value="111">
			<label for="input1">SUM</label>
			<br>
			<input type="radio" id="input2" name="mode" value="222">
			<label for="input2">-</label>
			<br>
			<input type="radio" id="input4" name="mode" value="333">
			<label for="input4">*</label>
			<br>
			<input type="radio" id="input3" name="mode" value="444">
			<label for="input3">/</label>
			<hr>
			<input type="submit">
		</form>
		<hr>
		<h1><?= $result ?></h1>
	</body>
</html>

