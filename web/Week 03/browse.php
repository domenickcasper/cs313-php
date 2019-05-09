<!DOCTYPE html>
<html>
<head>
	<title>Browse Items</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Browse</h1>
	<div class = "topnav">
		<a class="active" href="././Week%2002/assignments.html">Assignments</a>
		<a href="./browse.html">Browse</a>
		<a href="./viewcart.html">View Cart</a>
		<a href="./checkout.html">Checkout</a>
		<a href="./confirmation.html">Confirmation</a>
	</div>

	<form action="checkout.php" method="post">
		<input type="checkbox" name="item1" value="borderlands">Borderlands<br>
		<input type="checkbox" name="item2" value="overwatch">Overwatch<br>
		<input type="checkbox" name="item3" value="left4dead">Left 4 Dead<br>
		<input type="checkbox" name="item4" value="half-life">Half-Life<br>
		<input type="checkbox" name="item5" value="portal">Portal<br>
		<input type="checkbox" name="item6" value="halo">Halo<br>
		<input type="checkbox" name="item7" value="kingdomhearts">Kingdom Hearts<br>
		<input type="checkbox" name="item8" value="pokemon">Pokemon<br>
		<input type="checkbox" name="item9" value="zelda">Legend of Zelda Breath of the Wild<br>

		<input type="submit" name="Submit">
	</form>
</body>
</html>