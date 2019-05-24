<? php
include 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY</title>
</head>
<body>

<? php
foreach ($db->query('SELECT email, password FROM users') as $row)
{
  echo 'email: ' . $row['email'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}
?>

</body>
</html>