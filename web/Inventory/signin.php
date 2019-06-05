<?php
session_start();

$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{

	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	include 'database.php';
	$db = get_db();
	$query = 'SELECT password FROM login WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		if (password_verify($password, $hashedPasswordFromDB))
		{

			$_SESSION['username'] = $username;
			header("Location: home.php");
			die(); 
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="./inventory.css">
</head>
<body>

<h1>Please sign in below:</h1>

<form id="mainForm" action="signin.php" method="POST">

	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<label for="txtUser">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />

</form>

<br /><br />

Or <a href="signup.php">Sign up</a> for a new account.


</body>
</html>