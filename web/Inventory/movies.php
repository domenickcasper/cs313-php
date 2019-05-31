<?php
session_start();
include 'database.php';
if (isset($_POST)) {
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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>



</body>
</html>