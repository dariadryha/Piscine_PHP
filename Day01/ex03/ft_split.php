<?php
	function ft_split($line)
	{
		$line = preg_replace("/\s+/", " ", $line);
		$line = trim($line);
		$mas = explode(" ", $line);
		sort($mas);
		print_r($mas);
	}
?>
