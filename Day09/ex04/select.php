<?php
	if (file_exists('list.csv'))
	{
		$str = file_get_contents('list.csv');
		if ($str)
			print($str);
	}
?>
