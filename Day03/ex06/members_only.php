<?php
	if (!$_SERVER["PHP_AUTH_USER"] || !$_SERVER["PHP_AUTH_PW"])
	{
		header('HTTP/1.0 401 Unauthorized');
		header('WWW-Authenticate: Basic realm="My Realm:"');
	}
	if ($_SERVER["PHP_AUTH_USER"] != "zaz" || $_SERVER["PHP_AUTH_PW"] != "jaimelespetitsponeys")
		echo "<html><body>That area is accessible for members only</body></html>\n";
	else
	{
		$file = file_get_contents("../img/42.png");
		$encode = base64_encode($file);
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64, $encode'>\n</body></html>\n";
	}
?>
