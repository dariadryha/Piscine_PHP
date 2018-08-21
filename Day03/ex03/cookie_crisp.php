<?php
	if ($_GET["action"] == "set")
	{
		if (!setcookie($_GET["name"], $_GET["value"], time() + 3600))
			exit(1);
	}
	if ($_GET["action"] == "get" and $_COOKIE[$_GET["name"]])
		echo $_COOKIE[$_GET["name"]]."\n";
	if ($_GET["action"] == "del")
	{
		if (!setcookie($_GET["name"], $_COOKIE[$_GET["name"]], time() - 3600))
			exit(1);
	}
?>
