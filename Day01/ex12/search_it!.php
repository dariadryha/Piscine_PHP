#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$mas = array_slice($argv, 1);
		$line = array_shift($mas);
		foreach ($mas as $value)
		{
			$arr = preg_split("/:/", $value);
			if ($arr[0] == $line)
				$res = $arr[1]; 
		}
		if ($res)
			echo "$res\n";
	}
?>
