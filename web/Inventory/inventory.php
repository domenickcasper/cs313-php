<?php
include 'database.php';
session_start();
$temporary = -1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY</title>
	<link rel="stylesheet" href="./inventory.css">
</head>
<body>

<!--Movie Form-->
<form action="movies.php" method="POST" >
<p>Movies</p>
Title: <input type="text" name="movieTitle">
Sub-Title: <input type="text" name="movieSubTitle">

<!--Movie Ratings-->
<select name="movieRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
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

<!--Movie Types-->
<select name="movieType">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 0') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>


<input type="submit" value="Submit">
<button><a href="./movies.php">View Movies</a></button>
</form>



<!--Video Game Form-->
<form action="console.php" method="POST">
<p>Video Games</p>
Title: <input type="text" name="vgTitle">
Sub-Title: <input type="text" name="vgSubTitle">

<!--Video Game Rating-->
<select name="vgRating">
<?php
foreach ($db->query('SELECT id, rating FROM rating WHERE media = 1') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
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

<!--Video Game Console-->
<select name="console">
<?php
foreach ($db->query('SELECT id, console FROM console') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['console'] . '</option>';
	}
?>
</select>

<input type="submit" value="Submit">
<button><a href="./console.php">View Games</a></button>
</form>

<!--Music Form-->
<form action = "music.php" method="POST">
<p>Music</p>

Title: <input type="text" name="musicTitle">
Artist: <input type="text" name="artist">
Album: <input type="text" name="album">

<!--Music Genres-->
<select name="musicGenre">
<?php
foreach ($db->query('SELECT id, genre FROM genre WHERE media = 2') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
	}
?>
</select>

<!--Music Types-->
<select name="music">
<?php
foreach ($db->query('SELECT id, type FROM type WHERE media = 2') as $row)
	{
  	echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
	}
?>
</select>

<input type="submit" value="Submit">
<button><a href="./music.php">View Music</a></button>
</form>

<br><br>
<button><a href="home.php">Back to Homepage</a></button>
<button><a href="signout.php">Sign Out</a></button>

</body>
</html>