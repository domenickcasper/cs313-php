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
<?php
if (isset($_SESSION['movieid'])) {
	$movieid = $db->query('SELECT * FROM ' . $_SESSION['table'] . ' WHERE id = ' . $_SESSION['movieid']);
	$temporary = $movieid->fetch();	
}
?>

<?php
#MOVIE
if($_SESSION['table'] == 'movies') {
	echo '<form action="movies.php" method="POST" >';
	echo '<p>Movies</p>';
		echo 'Title: <input type="text" value="' . $temporary['title'] . '" name="movieTitle">';
		echo 'Sub-Title: <input type="text" value="' . $temporary['subtitle'] . '" name="movieSubTitle">';

	#RATING
	echo '<select name="movieRating">';

	foreach ($db->query('SELECT id, rating FROM rating WHERE media = 0') as $row)
		{
			if($temporary['rating'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['rating'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
			}
		}

	echo '</select>';

	#GENRE
	echo '<select name="movieGenre">';
	foreach ($db->query('SELECT id, genre FROM genre WHERE media = 0') as $row)
		{
			if($temporary['genre'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['genre'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
			}
		}

	echo '</select>';

	#TYPE
	echo '<select name="movieType">';
	foreach ($db->query('SELECT id, type FROM type WHERE media = 0') as $row)
		{
			if($temporary['type'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['type'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
			}
		}
	echo '</select>';

	echo '<input type="submit" name="updateMovies" value="Update">';
	echo '</form>';
}

if (isset($_SESSION['movieid'])) {
	unset($temporary);
}

?>

<?php

if (isset($_SESSION['consoleid'])) {
	$consoleid = $db->query('SELECT * FROM ' . $_SESSION['table'] . ' WHERE id = ' . $_SESSION['consoleid']);
	$temporary = $consoleid->fetch();	
}
?>

<?php
if($_SESSION['table'] == 'video_games') {
	#VIDEOGAME
	echo '<form action="console.php" method="POST">';
	echo '<p>Video Games</p>';
	echo 'Title: <input type="text" value="' . $temporary['title'] . '" name="vgTitle">';
	echo 'Sub-Title: <input type="text" value="' . $temporary['subtitle'] . '" name="vgSubTitle">';

	#RATING
	echo '<select name="vgRating">';

	foreach ($db->query('SELECT id, rating FROM rating WHERE media = 1') as $row)
		{
			if($temporary['rating'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['rating'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['rating'] . '</option>';
			}
		}
	echo '</select>';

	#GENRE
	echo '<select name="vgGenre">';
	foreach ($db->query('SELECT id, genre FROM genre WHERE media = 1') as $row)
		{
			if($temporary['genre'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['genre'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
			}
		}
	echo '</select>';

	#CONSOLE
	echo '<select name="console">';
	foreach ($db->query('SELECT id, console FROM console') as $row)
		{
			if($temporary['console'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['console'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['console'] . '</option>';
			}
		}
	echo '</select>';

	echo '<input type="submit" name="updateConsole" value="Update">';
	echo '</form>';
}
	if (isset($_SESSION['consoleid'])) {
		unset($temporary);
	}

?>

<?php
if (isset($_SESSION['musicid'])) {
	$musicid = $db->query('SELECT * FROM ' . $_SESSION['table'] . ' WHERE id = ' . $_SESSION['musicid']);
	$temporary = $musicid->fetch();	
}
?>

<?php
if($_SESSION['table'] == 'music') {
	#MUSIC
	echo '<form action = "music.php" method="POST">';
	echo '<p>Music</p>';

		echo 'Title: <input type="text" value="' . $temporary['title'] . '" name="musicTitle">';
		echo 'Artist: <input type="text" value="' . $temporary['artist'] . '" name="artist">';
		echo 'Album: <input type="text" value="' . $temporary['album'] . '" name="album">';

	#GENRE
	echo '<select name="musicGenre">';
	foreach ($db->query('SELECT id, genre FROM genre WHERE media = 2') as $row)
		{
	  		if($temporary['genre'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['genre'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['genre'] . '</option>';
			}
		}
	echo '</select>';

	#TYPES
	echo '<select name="music">';
	foreach ($db->query('SELECT id, type FROM type WHERE media = 2') as $row)
		{
			if($temporary['type'] == $row['id']) {
	  			echo '<option value =' . $row['id'] . ' selected>' . $row['type'] . '</option>';
			}
			else {
				echo '<option value =' . $row['id'] . '>' . $row['type'] . '</option>';
			}
		}
	echo '</select>';

	echo '<input type="submit" name="updateMusic" value="Update">';
	echo '</form>';
}
	if (isset($_SESSION['musicid'])) {
		unset($temporary);
	}
?>

</body>
</html>