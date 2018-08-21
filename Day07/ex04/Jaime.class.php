<?php
	class Jaime extends Lannister {
		public function sleepWith($val)
		{
			if ($val instanceof Lannister)
			{
				if ($val instanceof Cersei)
					echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
				else
					echo "Not even if I'm drunk !" . PHP_EOL;
			}
			else
				echo "Let's do this." . PHP_EOL;
		}
	}
?>
