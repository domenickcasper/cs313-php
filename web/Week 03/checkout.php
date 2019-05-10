<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Checkout</h1>
	<div class = "topnav">
		<a class="active" href="./assignments.html">Assignments</a>
		<a href="./browse.php">Browse</a>
		<a href="./viewcart.php">View Cart</a>
		<a href="./checkout.php">Checkout</a>
		<a href="./confirmation.php">Confirmation</a>
	</div>

<?php
	$address = $_POST["street"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
?>

<form action = "./confirmation.php" method="post">
	<div>
		Address: 
		<input type="text" name="street" size="35" placeholder="Full Address"><br>
	</div>
	<div>
		City: 
		<input type="text" name="city" size="20" placeholder="ex. San Jose"><br>
	</div>
	<div>
		State: 
		<input type="text" name="state" size="10" placeholder="ex. CA"><br>
	</div>
	<div>
		ZIP: 
		<input type="text" name="zip" size="5" placeholder="ex. 95124"><br>
	</div>
	<input type = "submit" name = "submit"  value = "Confirm Order">
</form>
</body>
</html>