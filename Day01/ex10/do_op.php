#!/usr/bin/php
<?php
	if ($argc != 4)
		exit(print("Incorrect Parameters\n"));
	$mas = array_slice($argv, 1);
	foreach ($mas as $key => $value)
		$mas[$key] = trim($value);
	if (($mas[1] == '/' or $mas[1] == '%') and $mas[2] == '0')
		exit(1);
	eval("\$str = $mas[0] $mas[1] $mas[2];");
	print($str)."\n";
?>
