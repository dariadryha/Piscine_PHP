<?php
	function ft_check_matches($file, $val)
	{
		foreach ($file as $value)
		{
			if ($value['login'] == $val['login'] and $value['password'] != $val['password'])
				return (2);
			if ($value['login'] == $val['login'] and $value['password'] == $val['password'])
				return (0);
			return (1);
		}
	}

	function ft_error($name, $passwd)
	{
		if (!$name and !$passwd)
			return ('Enter your login and password');
		else if (!$name)
			return ('Wrong login');
		else if (!$passwd)
			return ('Wrong password');
	}

	if ($_POST['submit'] == 'OK' and (!$_POST['login'] or !$_POST['password']))
		$res = ft_error($_POST['login'], $_POST['password']);
	else if ($_POST['submit'] == 'OK' and $_POST['login'] and $_POST['password'])
	{
		$path_file = "../private/passwd";
		if (!file_exists($path_file))
			$res = "No such account";
		else
		{
			$file = unserialize(file_get_contents($path_file));
			$val['login'] = $_POST['login'];
			$val['password'] = hash('whirlpool', $_POST['password']);
			$ans = ft_check_matches($file, $val);
			if (!$ans)
			{
				foreach ($file as $key => $value) {
					if ($value['login'] == $_POST['login'])
						$file[$key] = "";
				}
				$file = serialize($file);
				file_put_contents($path_file, $file);
				header('Location: logout.php');
			}
			else if ($ans == 1)
				$res = 'You need create account';
			else
				$res = 'Wrong password';
		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Shop</title>
	<style type="text/css">
		body {
			margin: 0;
			background-color: #fafafa;
		}
		form {
			height: 300px;
			background-color: #ddd;
			width: 500px;
			margin: 0 auto;
			padding: 20px;
			text-align: right;
			border-radius: 5px;
		}
		.field {
			width: 400px;
			height: 25px;
			margin: 0 0 10px 10px;
			border-radius: 3px;
		}
		#submit {
			width: 50px;
		}
	</style>
</head>
<body>
	<div>
		<form name="del.php" action="del.php" method="post">
			Username: <input class='field' type="text" name="login" value="" />
			<br />
			Password: <input class='field' type="password" name="password" value="" />
			<br />
			<?php echo "$res\n"; ?>
			<input id="submit" type="submit" name="submit" value="OK" />
			<br />
		</form>
	</div>
</body>
</html>
