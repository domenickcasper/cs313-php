<?php

$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
if (!isset($email) || $email == ""
	|| !isset($password) || $password == "")
{
	header("Location: signup.php");
	die(); 
}

$email = htmlspecialchars($email);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

include 'database.php';

$query = 'INSERT INTO users(email, password) VALUES(:email, :password)';
$statement = $db->prepare($query);
$statement->bindParam(':email', $email);
$statement->bindParam(':password', $hashedPassword);
$statement->execute();
header("Location: signin.php");
die();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" href="./inventory.css">
</head>
<body>

	<button><a href="home.php">Back to the Homepage</a></button>

</body>
</html>