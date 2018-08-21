<?php
	session_start();
	if ($_GET["submit"] == "OK")
	{
		if ($_GET['login'] and $_GET['passwd'])
		{
			$_SESSION['user'] = $_GET['login'];
			$_SESSION['password'] = $_GET['passwd'];
		}
	}
?>
<html><body>
<form name="index.php" action="index.php" method="get">
	Username: <input type="text" name="login" value="<?php echo $_SESSION['user'];?>" />
	<br />
	Password: <input type="password" name="passwd" value="<?php echo $_SESSION['password'];?>" />
	<br />
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>
