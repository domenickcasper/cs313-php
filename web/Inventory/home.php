<?php
session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
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
<div>

	<h1>Welcome to the homepage!</h1>

	Your username is: <?= $username ?><br /><br />

	<a href="signout.php">Sign Out</a>
	<a href="inventory.php">View Your Inventory</a>
</div>

</body>
</html>