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
</head>

<body>

	<h1>Welcome to the homepage!</h1>

	Your email is: <?= $email ?><br /><br />

	<a href="signout.php">Sign Out</a>
	<a href="inventory.php">View Your Inventory</a>

</body>
</html>