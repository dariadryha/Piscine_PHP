<?php
	function ft_find_matches($file, $val)
	{
		foreach ($file as $value) {
			if ($value['login'] == $val['login'] and $value['passwd'] == $val['passwd'])
				return (0);
		}
		exit("ERROR\n");
	}

	if ($_POST['submit'] != 'OK' or !$_POST['login'] or !$_POST['oldpw'] or !$_POST['newpw'])
		exit("ERROR\n");
	$path_file = "../private/passwd";
	$file = unserialize(file_get_contents($path_file));
	$val['login'] = $_POST['login'];
	$val['passwd'] = hash('whirlpool', $_POST['oldpw']);
	ft_find_matches($file, $val);
	$val['passwd'] = hash('whirlpool', $_POST['newpw']);
	foreach ($file as $key => $value) {

		if ($value['login'] == $val['login'])
			$file[$key] = $val;
	}
	$file = serialize($file);
	file_put_contents($path_file, $file);
	exit("OK\n");
?>
