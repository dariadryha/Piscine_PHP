#!/usr/bin/php
<?php
	function ft_print_who($arr)
	{
		$i = 0;
		while ($arr[$i])
		{
			echo $arr[$i]."   ".$arr[$i + 1]."  ".$arr[$i + 2]."\n";
			$i += 3;
		}
	}

	if (!($file = fopen("/var/run/utmpx", "r")))
		exit(1);
	date_default_timezone_set('Europe/Kiev');
	$arr = array();
	$user = get_current_user();
	while ($utmpx = fread($file, 628))
	{
		$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
		if (trim($unpack[a]) == $user and trim($unpack[e]) == 7)
		{
			array_push($arr, trim($unpack[a]));
			array_push($arr, trim($unpack[c]));
			array_push($arr, date('M  j H:i' ,trim($unpack[f1])));
		}
	}
	ft_print_who($arr);
	fclose($file);
?>
