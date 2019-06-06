<?php
session_start();
if (isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
}
else
{
	header("Location: signin.php");
	die(); 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="./inventory.css">
</head>

<body>

	<h1>Welcome to the homepage!</h1>

	You're signed in as: <?= $email ?><br /><br />

	<button><a href="signout.php">Sign Out</a></button>
	<button><a href="inventory.php">View Your Inventory</a></button>

</body>
</html>