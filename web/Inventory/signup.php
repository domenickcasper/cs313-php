<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="./inventory.css">
</head>
<body>

<h1>Sign up for new account</h1>

<form id="mainForm" action="createAccount.php" method="POST">

	<input type="text" id="txtEmail" name="txtEmail" placeholder="Email">
	<label for="txtEmail">Email</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></input>
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Create Account" />

</form>


</body>
</html>