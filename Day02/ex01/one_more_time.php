#!/usr/bin/php
<?php
	function ft_create_month($line)
	{
		$line = preg_replace("/[Jj]anvier/", "January", $line);
		$line = preg_replace("/[Ff]evrier/", "February", $line);
		$line = preg_replace("/[Mm]ars/", "March", $line);
		$line = preg_replace("/[Aa]vril/", "April", $line);
		$line = preg_replace("/[Mm]ai/", "May", $line);
		$line = preg_replace("/[Jj]uin/", "June", $line);
		$line = preg_replace("/[Jj]uillet/", "July", $line);
		$line = preg_replace("/[Aa]out/", "August", $line);
		$line = preg_replace("/[Ss]eptembre/", "September", $line);
		$line = preg_replace("/[Oo]ctobre/", "October", $line);
		$line = preg_replace("/[Nn]ovembre/", "November", $line);
		$line = preg_replace("/[Dd]ecembre/", "December", $line);
		return ($line);
	}
    
	if ($argc > 1)
	{
		if (!preg_match("/(^[A-Z]?[a-z]+)\s[0-3]{0,1}\d\s[A-Z]?[a-z]+\s\d{4}\s[0-2]\d:[0-5]\d:[0-5]\d$/", $argv[1]))
			exit(print("Wrong Format\n"));
		date_default_timezone_set('Europe/Paris');
		$argv[1] = ft_create_month($argv[1]);
		$argv[1] = preg_replace("/^[A-Z]?[a-z]+\s/", "", $argv[1]);
		echo strtotime($argv[1])."\n";
	} 
?>
