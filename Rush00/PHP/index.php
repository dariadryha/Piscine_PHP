<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rush_Shop</title>
	<link href="../maket.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div id="info">
			<?php
				session_start();
				if (isset($_SESSION['user']))
				{
					echo '<a id="login" href="logout.php">Logout</a>';
					echo '<a id="login" href="del.php">Delete account</a>';
				}
				else
					echo '<a id="login" href="login.php">Login</a>';
			?>
			<form name="search.php" action="PHP/search.php" method="get">
				<input id="searchfield" type="search" name="search" value="Поиск" />
				<input type="submit" name="submit" value="Найти" />
			</form>
			<a id="basket" href="basket.php"><img src="../img/basket.png" alt="basket"></a>
			<a id="main_page" href="index.php">BergHOFF</a>
		</div>
		<div id="nav">
			<a href="product.php?value=Glass">Glass</a>
			<a href="product.php?value=Plate">Plate</a>
			<a href="product.php?value=Cup">Cup</a>
			<a href="product.php?value=Pan">Pan</a>
			<a href="product.php?value=Pot">Pot</a>
			<a href="product.php?value=Kettle">Kettle</a>
		</div>
	</header>
	<h1>Кухонная посуда BergHOFF</h1>
	<div id="content">
		<div id="main"></div>
	</div>
	<div if="footer">
	</div>
</body>
</html>
