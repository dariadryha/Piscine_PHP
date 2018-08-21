<?php
	class Lannister {
		public function sleepWith($val)
		{
			if ($this instanceof Jaime && $val instanceof Cersei or $this instanceof Cersei && $val instanceof Jaime)
				echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
			else if ($val instanceof Lannister)
				echo "Not even if I'm drunk !" . PHP_EOL;
			else if (!($val instanceof Lannister))
				echo "Let's do this." . PHP_EOL;
		}
	}
?>
