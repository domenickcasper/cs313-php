<?php
session_start();

$badLogin = false;

if (isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
{

	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];

	include 'database.php';
	$query = 'SELECT password FROM users WHERE email=:email';
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		if (password_verify($password, $hashedPasswordFromDB))
		{

			$_SESSION['email'] = $email;
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

	<input type="text" id="txtEmail" name="txtEmail" placeholder="Email">
	<label for="txtEmail">Email</label>
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