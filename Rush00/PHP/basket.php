<?php
	function ft_add_to_basket()
	{
		session_start();
		$val['name'] = $_GET['value'];
		$val['price'] = $_GET['price'];
		$val['number'] = 1;
		if (!$_SESSION['basket'])
			$_SESSION['basket'][$_GET['value']] = $val;
		else
		{
			if ($_SESSION['basket'][$_GET['value']])
				$_SESSION['basket'][$_GET['value']]['number'] += 1;
			else
				$_SESSION['basket'][$_GET['value']] = $val;
		}
	}
	function ft_print_basket()
	{
		foreach ($_SESSION['basket'] as $value)
		{
			echo '<p>Stuff:' . $value['name'] . ", Price: " . $value['price'] . ", Number: " . $value['number'] . '</p>';
			$res += $value['price'] * $value['number'];
		}
		echo '<p>Sum is: ' . $res . '</p>';
		echo '<a href="maket.php"><button>Купить</button></a>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Basket</title>
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
	<div id="content">
		<div id="formforbasket">
			<?php
				session_start();
				echo '<h1>Hello, ' . $_SESSION['user'] . " it's your basket!:)" . '</h1>';
				echo '<br />';
				if (!$_GET['value'] and !$_SESSION['basket'])
					echo "Sorry, your basket is empty!:(" . '<br />';
				else
				{
					if ($_GET['value'])
					{
						ft_add_to_basket();
						header('Location: product.php?value=' . $_GET['category']);
					}
					ft_print_basket();
				}
			?>
		</div>
	</div>
	<div if="footer">
	</div>
</body>
</html>
