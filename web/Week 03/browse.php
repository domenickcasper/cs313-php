<?php
session_start();

if (isset($_POST)) {
	$items = $_POST["item"];
	foreach ($items as $key) {
		$_SESSION[$key] = 1;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse Items</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Browse</h1>
	<div class = "topnav">
		<a class="active" href="../Week%2002/assignments.html">Assignments</a>
		<a href="./browse.php">Browse</a>
		<a href="./viewcart.php">View Cart</a>
		<a href="./checkout.php">Checkout</a>
		<a href="./confirmation.php">Confirmation</a>
	</div>

	<form action="browse.php" method="post">
		<input type="checkbox" name="item[]" value="Borderlands">Borderlands<br>
		<input type="checkbox" name="item[]" value="Overwatch">Overwatch<br>
		<input type="checkbox" name="item[]" value="Left 4 Dead">Left 4 Dead<br>
		<input type="checkbox" name="item[]" value="Half-Life">Half-Life<br>
		<input type="checkbox" name="item[]" value="Portal">Portal<br>
		<input type="checkbox" name="item[]" value="Halo">Halo<br>
		<input type="checkbox" name="item[]" value="Kingdom Hearts">Kingdom Hearts<br>
		<input type="checkbox" name="item[]" value="Pokemon">Pokemon<br>
		<input type="checkbox" name="item[]" value="Zelda: Breath of the Wild">Legend of Zelda Breath of the Wild<br>

		<input type="submit" name="Submit">
	</form>


</body>
</html>