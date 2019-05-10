<?php
session_start();

if (isset($_POST)) {
	$items = $_POST["item"];
	$_SESSION["items"] = $items;
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
		<a class="active" href="././Week%2002/assignments.html">Assignments</a>
		<a href="./browse.php">Browse</a>
		<a href="./viewcart.php">View Cart</a>
		<a href="./checkout.php">Checkout</a>
		<a href="./confirmation.php">Confirmation</a>
	</div>

	<form action="browse.php" method="post">
		<input type="checkbox" name="item[]" value="borderlands, 20">Borderlands<br>
		<input type="checkbox" name="item[]" value="overwatch, 20">Overwatch<br>
		<input type="checkbox" name="item[]" value="left4dead, 10">Left 4 Dead<br>
		<input type="checkbox" name="item[]" value="half-life, 10">Half-Life<br>
		<input type="checkbox" name="item[]" value="portal, 10">Portal<br>
		<input type="checkbox" name="item[]" value="halo, 15">Halo<br>
		<input type="checkbox" name="item[]" value="kingdomhearts, 20">Kingdom Hearts<br>
		<input type="checkbox" name="item[]" value="pokemon, 20">Pokemon<br>
		<input type="checkbox" name="item[]" value="zelda, 20">Legend of Zelda Breath of the Wild<br>

		<input type="submit" name="Submit">
	</form>


</body>
</html>