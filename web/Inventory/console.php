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

</body>
</html>