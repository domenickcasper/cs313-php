<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Order Confirmation</h1>
	<div class = "topnav">
		<a class="active" href="./assignments.html">Assignments</a>
		<a href="./browse.php">Browse</a>
		<a href="./viewcart.php">View Cart</a>
		<a href="./checkout.php">Checkout</a>
		<a href="./confirmation.php">Confirmation</a>
	</div>

<h1>Your Items:</h1>
	<form action="confirmation.php" method="post">
	<?php
			if (isset($_SESSION["Borderlands"])) {
				echo "<h1>Borderlands</h1>";
			}
			if (isset($_SESSION["Overwatch"])) {
				echo "<h1>Overwatch</h1>";
			}
			if (isset($_SESSION["Left 4 Dead"])) {
				echo "<h1>Left 4 Dead</h1>";
			}
			if (isset($_SESSION["Half-Life"])) {
				echo "<h1>Half-Life</h1>";
			}
			if (isset($_SESSION["Portal"])) {
				echo "<h1>Portal</h1>";
			}
			if (isset($_SESSION["Halo"])) {
				echo "<h1>Halo</h1>";
			}
			if (isset($_SESSION["Kingdom Hearts"])) {
				echo "<h1>Kingdom Hearts</h1>";
			}
			if (isset($_SESSION["Pokemon"])) {
				echo "<h1>Pokemon</h1>";
			}
			if (isset($_SESSION["Zelda: Breath of the Wild"])) {
				echo "<h1>Zelda: Breath of the Wild</h1>";
			}
	?>
</form>


	<br><br><h1> Shipping Address: </h1>
	<?php
	$address = htmlspecialchars($_POST["street"]);
	$city = htmlspecialchars($_POST["city"]);
	$state = htmlspecialchars($_POST["state"]);
	$zip = htmlspecialchars($_POST["zip"]);
	echo ("<h1>$name <br /> $address <br /> $city, $state $zip </h1>");

	?>
</body>
</html>