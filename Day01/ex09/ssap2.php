#!/usr/bin/php
<?php
	function ft_make_decision($a, $b)
	{
		if (ctype_alpha($a) and !ctype_alpha($b))
			return (-1);
		if (!ctype_alpha($a) and ctype_alpha($b))
			return (1);
		if (!ctype_digit($a) and !ctype_alpha($a) and ctype_digit($b))
			return (1);
		if (ctype_digit($a) and (!ctype_alpha($b) and !ctype_digit($b)))
			return (-1);
		return ($a < $b) ? -1 : 1;
	}

	function cmp ($a, $b)
	{
		$i = 0;
		while ($a[$i] and $b[$i])
		{
			if (ctype_upper($a[$i]))
				$a[$i] = lcfirst($a[$i]);
			if (ctype_upper($b[$i]))
				$b[$i] = lcfirst($b[$i]);
			if ($a[$i] != $b[$i])
				return (ft_make_decision($a[$i], $b[$i]));
			$i++;
		}
		return ($a[$i] <= $b[$i]) ? -1 : 1;
	}

	if ($argc > 1)
	{
		$line = implode(" ", array_slice($argv, 1));
		$line = preg_replace("/\s+/", " ", $line);
		$line = trim($line);
		$mas = explode(" ", $line);
		uasort($mas, 'cmp');
		foreach ($mas as $value)
			echo "$value\n";
	}
?>
