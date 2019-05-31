<?php
session_start();
include 'database.php';
if (isset($_POST)) {
	if (isset($_POST['delete'])) {
		$db->query('DELETE FROM video_games WHERE id =' . $_POST['delete']);
	}
	else {
		$vgT = $_POST['vgTitle'];
		$vgST = $_POST['vgSubTitle'];
		$vgR = $_POST['vgRating'];
		$vgG = $_POST['vgGenre'];
		$console = $_POST['console'];
		$user = 1;

		$sql = 'INSERT INTO video_games (title, subtitle, rating, genre, console, user_id)
					VALUES (:title, :subtitle, :rating, :genre, :console, :user_id)';

		$prep = $db->prepare($sql);
		$prep->bindParam(':title', $vgT);
		$prep->bindParam(':subtitle', $vgST);
		$prep->bindParam(':rating', $vgR);
		$prep->bindParam(':genre', $vgG);
		$prep->bindParam(':console', $console);
		$prep->bindParam(':user_id', $user);

		$prep->execute();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Video Games</title>
</head>
<body>
<form method="POST" action="console.php">
<table>
	<tr>
		<th>Title</th>
		<th>Sub-Title</th>
		<th>Rating</th>
		<th>Genre</th>
		<th>Console</th>
	</tr>
<?php
	foreach ($db->query('SELECT v.id, v.title, v.subtitle, g.genre, c.console, r.rating FROM video_games v
	INNER JOIN rating r ON v.rating = r.id INNER JOIN console c ON v.type = c.id 
	INNER JOIN genre g ON v.genre = g.id WHERE v.user_id = 1') as $row) {
		echo '<tr>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['subtitle'] . '</td>';
		echo '<td>' . $row['rating'] . '</td>';
		echo '<td>' . $row['genre'] . '</td>';
		echo '<td>' . $row['console'] . '</td>';
		echo '<td><button type="submit" value="' . $row['id'] . '"name="delete">Delete Items</button>'; 
		echo '</tr>';
	}
?>
</body>
</html>