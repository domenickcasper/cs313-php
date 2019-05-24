<?php
include 'database.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY</title>
</head>
<body>

<select name="type0">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

</body>
</html>