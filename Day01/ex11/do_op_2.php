#!/usr/bin/php
<?php
	if ($argc != 2)
		exit(print("Incorrect Parameters\n"));
	if (!preg_match("/^\s*\d+\s*[+-\/\*%]\s*\d+\s*$/", $argv[1]))
		exit(print("Syntax Error\n"));
	$argv[1] = preg_replace("/\s*/", "", $argv[1]);
	$mas = preg_split("/[+-\/\*%]/", $argv[1]);
	$mas[] = preg_replace("/\d*/", "", $argv[1]);
	if (($mas[2] == '/' or $mas[2] == '%') and $mas[1] == '0')
		exit(print("Syntax Error\n"));
	eval("\$str = $mas[0] $mas[2] $mas[1];");
	print($str)."\n";
?>
