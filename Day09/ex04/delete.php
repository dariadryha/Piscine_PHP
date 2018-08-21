<?php
	if (isset($_GET['key']))
	{
		$str = file_get_contents('list.csv');
		$p = "/" . $_GET['key'] . ".+\n/";
		$str = preg_replace($p, "", $str);
		file_put_contents('list.csv', $str);
	}
?>
