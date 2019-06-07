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
	<link rel="stylesheet" href="./inventory.css">
</head>

<body>

	<h1>Welcome to your New Inventory App!</h1>

	You're signed in as: <?= $email ?><br /><br />

	<button><a href="signout.php">Sign Out</a></button>
	<button><a href="movies.php">View Movies</a></button>
	<button><a href="console.php">View Games</a></button>
	<button><a href="music.php">View Music</a></button>
	<button><a href="inventory.php">Add New Inventory</a></button>

</body>
</html>