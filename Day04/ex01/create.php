<?php
	function ft_check_matches($file, $val)
	{
		foreach ($file as $value) {
			if ($value['login'] == $val['login'])
				exit("ERROR\n");
		}
	}
	$path = "../private";
	$path_file = "../private/passwd";
	if ($_POST['submit'] != 'OK' or !$_POST['login'] or !$_POST['passwd'])
		exit("ERROR\n");
	$val['login'] = $_POST['login'];
	$val['passwd'] = $_POST['passwd'];
	if (!file_exists($path))
		mkdir($path);
	if (file_exists($path_file))
	{
		$file = file_get_contents($path_file);
		$file = unserialize($file);
	}
	else
		$file = array();
	ft_check_matches($file, $val);
	$val['passwd'] = hash('whirlpool', $val['passwd']);
	$file[] = $val;
	$file = serialize($file);
	file_put_contents($path_file, $file);
	echo "OK\n";
?>
