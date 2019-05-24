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
<form method="GET" action="inventory.php">
<p>Movies</p>
<select name="movies">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

<!-- -->
<select name="movieGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<!-- -->
<select name="movieRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
	}
?>
</select>

<p>Video Games</p>
<select name="console">
<?php
foreach ($db->query('SELECT id, console FROM console') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['console'] . '</option>';
	}
?>
</select>

<!-- -->
<select name="vgGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 1') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<!-- -->
<select name="vgRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 1') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
	}
?>
</select>

<p>Music</p>
<select name="music">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 2') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

<!-- -->
<select name="musicGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 2') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<input type="submit" value="Submit">
</form>

</body>
</html>