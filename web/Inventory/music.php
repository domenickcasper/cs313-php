<?php
session_start();
include 'database.php';
if (isset($_POST)) {
	if (isset($_POST['delete'])) {
		$db->query('DELETE FROM music WHERE id =' . $_POST['delete']);
	}
	else {
		$musicT = $_POST['musicTitle'];
		$musicAr = $_POST['artist'];
		$musicAl = $_POST['album'];
		$musicG = $_POST['musicGenre'];
		$musicTy = $_POST['music'];
		$user = 1;

		$sql = 'INSERT INTO music (title, artist, album, genre, type, user_id)
					VALUES (:title, :artist, :album, :genre, :type, :user_id)';

		$prep = $db->prepare($sql);
		$prep->bindParam(':title', $musicT);
		$prep->bindParam(':artist', $musicAr);
		$prep->bindParam(':album', $musicAl);
		$prep->bindParam(':genre', $musicG);
		$prep->bindParam(':type', $musicTy);
		$prep->bindParam(':user_id', $user);

		$prep->execute();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Music</title>
</head>
<body>
<form method="POST" action="music.php">
<table>
	<tr>
		<th>Title</th>
		<th>Artist</th>
		<th>Album</th>
		<th>Genre</th>
		<th>Type</th>
	</tr>
<?php
	foreach ($db->query('SELECT m.id, m.title, m.artist, m.album, g.genre, t.type FROM music m
	INNER JOIN type t ON m.type = t.id 
	INNER JOIN genre g ON m.genre = g.id WHERE m.user_id = 1') as $row) {
		echo '<tr>';
		echo '<td>' . $row['title'] . '</td>';
		echo '<td>' . $row['artist'] . '</td>';
		echo '<td>' . $row['album'] . '</td>';
		echo '<td>' . $row['genre'] . '</td>';
		echo '<td>' . $row['type'] . '</td>';
		echo '<td><button type="submit" value="' . $row['id'] . '"name="delete">Delete Items</button>'; 
		echo '</tr>';
	}
?>
</table>
</form>
</body>
</html>