<?php
session_start();

if (isset($_POST)) {
	$selected = $_POST["remove"];
	unset($_SESSION[$selected]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Cart</h1>
	<div class = "topnav">
		<a class="active" href="./assignments.html">Assignments</a>
		<a href="./browse.php">Browse</a>
		<a href="./viewcart.php">View Cart</a>
		<a href="./checkout.php">Checkout</a>
		<a href="./confirmation.php">Confirmation</a>
	</div>

	<h1>Items you wish to Purchase:<br> <h1>
<form action="viewcart.php" method="post">
	<?php
			if (isset($_SESSION["Borderlands"])) {
				echo "<h1>Borderlands</h1>" . "<button type = 'submit' name = 'remove' value = 'Borderlands'>Remove Borderlands</button>";
			}
	?>
</form>

</body>
</html>