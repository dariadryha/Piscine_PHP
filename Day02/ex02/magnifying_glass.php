#!/usr/bin/php
<?php
	function ft_replace_matches($str)
	{
		$str[0] = preg_replace_callback("/(?<=title).*=.*\"(.*)\"|>(.*)</U", function($matches) {
			return (strtoupper($matches[0]));
		},
		$str[0]);
		return ($str[0]);
	}

	if ($argc > 1)
	{
		if (!($mas = file($argv[1])))
			exit(1);
		foreach ($mas as $value)
		{
			$value = preg_replace_callback("/<a(.*>.*<)\/a>/", "ft_replace_matches", $value);
			echo $value;
		}
	}
?>
