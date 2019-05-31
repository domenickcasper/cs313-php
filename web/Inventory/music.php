<?php
session_start();
include 'database.php';
if (isset($_POST)) {
	if (isset($_POST['delete'])) {
		$db->query('DELETE FROM music WHERE id =' . $_POST['delete']);
	}
	else {
		$musicTitle = $_POST['musicTitle'];
		$musicArtist = $_POST['artist'];
		$musicAlbum = $_POST['album'];
		$musicGenre = $_POST['musicGenre'];
		$musicType = $_POST['music'];
		$user = 1;

		$sql = 'INSERT INTO music (title, artist, album, genre, type, user_id)
					VALUES (:title, :artist, :album, :genre, :type, :user_id)';

		$prep = $db->prepare($sql);
		$prep->bindParam(':title', $musicTitle);
		$prep->bindParam(':artist', $musicArtist);
		$prep->bindParam(':album', $musicAlbum);
		$prep->bindParam(':genre', $musicGenre);
		$prep->bindParam(':type', $musicType);
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

</body>
</html>