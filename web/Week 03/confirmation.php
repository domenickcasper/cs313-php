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

	<h3> Customer: </h3>
	<?php
		echo ("$name <br /> $address <br /> $city, $state $zip <br />");
	?>
</body>
</html>