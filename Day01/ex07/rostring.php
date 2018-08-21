#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$argv[1] = preg_replace("/\s+/", " ", $argv[1]);
		$argv[1] = trim($argv[1]);
		$mas = explode(" ", $argv[1]);
		array_push($mas, array_shift($mas));
		print(implode(" ", $mas)."\n");
	}
?>
