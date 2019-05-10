<?php
session_start();

if (isset($_POST)) {
	$count = 0;
	$selected = $_POST["remove"];
	foreach ($_SESSION["items"] as $key) {
		if ($selected == $key) {
			unset($_SESSION["items"][$count]);
		}
		$count++;
	}
	$_SESSION["items"] = $items;

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
		foreach ($_SESSION["items"] as $key) {
			echo "<h1>" . $key . "</h1>" . "<button type = 'submit' name = 'remove' value = '"
			. $key . "' > Remove " . $key . "</button> ";
		}
	?>
</form>

</body>
</html>