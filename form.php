<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 7</title>
</head>

<body>
	<h1>Server #</h1>
	<h2>Enter integers separated by commas: </h2>
	<form action="process.php" method="GET">
		<label>Integers: </label>
		<input type="text" name="numbers" required>
		<br>
		<label>Threshold: </label>
		<input type="number" name="threshold" required>
		<br>
		<input type="submit" value="Submit">
	</form>
</body>

</html>