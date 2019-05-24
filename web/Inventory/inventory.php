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

<!--Movie Form-->
<form action="movies.php" method="POST" >
<p>Movies</p>

<!--Movie Types-->
<select name="movies">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

<!--Movie Genres-->
<select name="movieGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<!--Movie Ratings-->
<select name="movieRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
	}
?>
</select>
<input type="submit" value="Submit">
</form>

<!--Video Game Form-->
<form action="console.php" method="POST">
<p>Video Games</p>

<!--Video Game Console-->
<select name="console">
<?php
foreach ($db->query('SELECT id, console FROM console') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['console'] . '</option>';
	}
?>
</select>

<!--Video Game Genres-->
<select name="vgGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 1') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<!--Video Game Rating-->
<select name="vgRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 1') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
	}
?>
</select>
<input type="submit" value="Submit">
</form>

<!--Music Form-->
<form action = "music.php" method="POST">
<p>Music</p>
<!--Music Types-->
<select name="music">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 2') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

<!--Music Genres-->
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