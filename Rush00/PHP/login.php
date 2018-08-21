<?php
	function ft_check_matches($file, $val)
	{
		foreach ($file as $value)
		{
			if ($value['login'] == $val['login'] and $value['password'] != $val['password'])
				return (2);
			if ($value['login'] == $val['login'] and $value['password'] == $val['password'])
				return (0);
		}
		return (1);
	}

	function ft_create_session($name)
	{
		session_start();
		$_SESSION['user'] = $name;
		header('Location: index.php');
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
		$path_dir = "../private";
		$path_file = "../private/passwd";
		if (!file_exists($path_dir))
			mkdir($path_dir);
		if (file_exists($path_file))
			$file = unserialize(file_get_contents($path_file));
		else
			$file = array();
		$val['login'] = $_POST['login'];
		$val['password'] = hash('whirlpool', $_POST['password']);
		$ans = ft_check_matches($file, $val);
		if (!$ans)
			ft_create_session($_POST['login']);
		else if ($ans == 1 and $_POST['account'])
		{
			$file[] = $val;
			$file = serialize($file);
			file_put_contents($path_file, $file);
			ft_create_session($_POST['login']);
		}
		else if ($ans == 1 and !$_POST['account'])
		{
			$res = 'You need create account';
		}
		else
			$res = 'Wrong password';
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
		<form name="login.php" action="login.php" method="post">
			Username: <input class='field' type="text" name="login" value="" />
			<br />
			Password: <input class='field' type="password" name="password" value="" />
			<br />
			<?php echo "$res\n"; ?>
			<input id="submit" type="submit" name="submit" value="OK" />
			<br />
			<div><input type="checkbox" name="account">  Create account</div>
			<br />
		</form>
	</div>
</body>
</html>
