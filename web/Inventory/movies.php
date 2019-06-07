<?php
session_start();
include 'database.php';

$_SESSION['table'] = 'movies';

if (!isset($_SESSION['id'])){
	header("Location: signin.php");
	die(); 
}
if (isset($_POST['update'])) {
	$_SESSION['movieid'] = $_POST['update'];
	header("Location: update.php");
	die();
}
if (isset($_POST)) {
	if (isset($_POST['delete'])) {
		$db->query('DELETE FROM movies WHERE id =' . $_POST['delete']);
	}
	elseif (isset($_POST['updateMovies'])) {
		$movieT = $_POST['movieTitle'];
		$movieS = $_POST['movieSubTitle'];
		$movieR = $_POST['movieRating'];
		$movieG = $_POST['movieGenre'];
		$movieTy = $_POST['movieType'];
		$user = $_SESSION['id'];

		$sql = 'UPDATE movies 
				SET title = :title AND subtitle = :subtitle AND rating = :rating 
					AND genre = :genre AND type = :type
				WHERE id = ' . $_SESSION['movieid'];

		$prep = $db->prepare($sql);
		$prep->bindParam(':title', $movieT);
		$prep->bindParam(':subtitle', $movieS);
		$prep->bindParam(':rating', $movieR);
		$prep->bindParam(':genre', $movieG);
		$prep->bindParam(':type', $movieTy);

		$prep->execute();
	}
	elseif (isset($_POST['movieTitle'])) {
		$movieT = $_POST['movieTitle'];
		$movieS = $_POST['movieSubTitle'];
		$movieR = $_POST['movieRating'];
		$movieG = $_POST['movieGenre'];
		$movieTy = $_POST['movieType'];
		$user = $_SESSION['id'];

		$sql = 'INSERT INTO movies (title, subtitle, rating, genre, type, user_id)
					VALUES (:title, :subtitle, :rating, :genre, :type, :user_id)';

		$prep = $db->prepare($sql);
		$prep->bindParam(':title', $movieT);
		$prep->bindParam(':subtitle', $movieS);
		$prep->bindParam(':rating', $movieR);
		$prep->bindParam(':genre', $movieG);
		$prep->bindParam(':type', $movieTy);
		$prep->bindParam(':user_id', $user);

		$prep->execute();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
	<link rel="stylesheet" href="./inventory.css">
</head>
<body>
<h1>Your Movie Inventory</h1>


	<button><a href="inventory.php">Add New Inventory Item</a></button>

<form method="POST" action="movies.php">
<table align="center">
	<tr>
		<th>Type</th>
		<th>Title</th>
		<th>Sub-Title</th>
		<th>Rating</th>
		<th>Genre</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php
	foreach ($db->query('SELECT m.id, m.title, m.subtitle, g.genre, t.type, r.rating FROM movies m 
	INNER JOIN rating r ON m.rating = r.id INNER JOIN type t ON m.type = t.id 
	INNER JOIN genre g ON m.genre = g.id WHERE m.user_id =' . $_SESSION['id'] . 'ORDER BY m.type, m.title') as $row) {
		echo '<tr>';
		echo '<td>' . $row['type'] . '</td>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['subtitle'] . '</td>';
		echo '<td>' . $row['rating'] . '</td>';
		echo '<td>' . $row['genre'] . '</td>';
		echo '<td><button type="submit" value="' . $row['id'] . '"name="update">Update</button>'; 
		echo '<td><button type="submit" value="' . $row['id'] . '"name="delete">Delete</button>';
		echo '</tr>';
	}
?>
</table>
</form>

</body>
</html>