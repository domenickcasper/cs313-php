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
			if (isset($_SESSION["Overwatch"])) {
				echo "<h1>Overwatch</h1>" . "<button type = 'submit' name = 'remove' value = 'Overwatch'>Remove Overwatch</button>";
			}
			if (isset($_SESSION["Left 4 Dead"])) {
				echo "<h1>Left 4 Dead</h1>" . "<button type = 'submit' name = 'remove' value = 'Left 4 Dead'>Remove Left 4 Dead</button>";
			}
			if (isset($_SESSION["Half-Life"])) {
				echo "<h1>Half-Life</h1>" . "<button type = 'submit' name = 'remove' value = 'Half-Life'>Remove Half-Life</button>";
			}
			if (isset($_SESSION["Portal"])) {
				echo "<h1>Portal</h1>" . "<button type = 'submit' name = 'remove' value = 'Portal'>Remove Portal</button>";
			}
			if (isset($_SESSION["Halo"])) {
				echo "<h1>Halo</h1>" . "<button type = 'submit' name = 'remove' value = 'Halo'>Remove Halo</button>";
			}
			if (isset($_SESSION["Kingdom Hearts"])) {
				echo "<h1>Kingdom Hearts</h1>" . "<button type = 'submit' name = 'remove' value = 'Kingdom Hearts'>Remove Kingdom Hearts</button>";
			}
			if (isset($_SESSION["Pokemon"])) {
				echo "<h1>Pokemon</h1>" . "<button type = 'submit' name = 'remove' value = 'Pokemon'>Remove Pokemon</button>";
			}
			if (isset($_SESSION["Zelda: Breath of the Wild"])) {
				echo "<h1>Zelda: Breath of the Wild</h1>" . "<button type = 'submit' name = 'remove' value = 'Zelda: Breath of the Wild'>Remove Zelda: Breath of the Wild</button>";
			}
	?>
</form>

</body>
</html>