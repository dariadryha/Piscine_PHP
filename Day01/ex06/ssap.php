#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$mas = array_slice($argv, 1);
		$line = implode(" ", $mas);
		$line = preg_replace("/\s+/", " ", $line);
		$line = trim($line);
		$mas = explode(" ", $line);
		sort($mas);
		foreach ($mas as $value)
			echo "$value\n";
	}
?>
