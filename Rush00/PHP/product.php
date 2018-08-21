<?php
	function ft_print_result($res)
	{
		foreach ($res as $value) {
			echo $value['Stuff'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $_GET['value']?></title>
	<link href="../maket.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div id="info">
			<?php
				session_start();
				if (isset($_SESSION['user']))
					echo '<a id="login" href="logout.php">Logout</a>';
				else
					echo '<a id="login" href="login.php">Login</a>';
			?>
			<form name="search.php" action="search.php" method="get">
				<input id="searchfield" type="search" name="search" placeholder="Поиск" />
				<input type="submit" name="submit" value="Найти" />
			</form>
			<a id="basket" href="basket.php"><img src="../img/basket.png" alt="basket"></a>
			<a id="main_page" href="index.php">BERGHoff</a>
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
	<div id="content">
		<div id="flex">
			<?php
				include 'install.php';
				foreach ($res as $value) {
					echo '<div class="window">' . '<img class="img" src="' . $value['Photo'] . '">' . '<p>' . $value['Stuff'] . " " . $value['Price'] . '</p><a href="basket.php?value=' . " " . $value['Stuff'] . '&price=' . $value['Price'] . '&category=' . $_GET['value'] . '"><button id="button">В корзину</button></a></div>';
				}
			?>
	</div>
	<div id="footer">
	</div>
</body>
</html>
