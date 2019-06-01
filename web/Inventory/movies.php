<?php
session_start();
include 'database.php';
if (isset($_POST)) {
	if (isset($_POST['delete'])) {
		$db->query('DELETE FROM movies WHERE id =' . $_POST['delete']);
	}
	else {
		$movieT = $_POST['movieTitle'];
		$movieS = $_POST['movieSubTitle'];
		$movieR = $_POST['movieRating'];
		$movieG = $_POST['movieGenre'];
		$movieTy = $_POST['movieType'];
		$user = 1;

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
</head>
<body>

<form method="POST" action="movies.php">
<table>
	<tr>
		<th>Title</th>
		<th>Sub-Title</th>
		<th>Rating</th>
		<th>Genre</th>
		<th>Type</th>
	</tr>
<?php
	foreach ($db->query('SELECT m.id, m.title, m.subtitle, g.genre, t.type, r.rating FROM movies m
	INNER JOIN rating r ON m.rating = r.id INNER JOIN type t ON m.type = t.id 
	INNER JOIN genre g ON m.genre = g.id WHERE m.user_id = 1') as $row) {
		echo '<tr>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['subtitle'] . '</td>';
		echo '<td>' . $row['rating'] . '</td>';
		echo '<td>' . $row['genre'] . '</td>';
		echo '<td>' . $row['type'] . '</td>';
		echo '<td><button value="' . $row['id'] . '"name="update">Update</button>'; 
		echo '<td><button type="submit" value="' . $row['id'] . '"name="delete">Delete</button>';
		echo '</tr>';
	}
?>
</table>
</form>

</body>
</html>