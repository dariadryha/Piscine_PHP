<?php
 	if (isset($_GET['key']) and isset($_GET['value']))
	{
		$fp = fopen('list.csv', 'a+');
		fputcsv($fp, $_GET, ";", ' ');
		fclose($fp);
	}
?>
