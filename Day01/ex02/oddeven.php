#!/usr/bin/php
<?php
	while (print("Enter a number: ") and $line = fgets(STDIN))
	{
		$line = str_replace("\n", "", $line);
		if (ctype_digit($line))
		{
			if ($line % 2)
				echo "The number $line is odd\n";
			else
				echo "The number $line is even\n";
		}
		else
			echo "'$line' is not a number\n";
	}
?>
