<?php
	class Tyrion extends Lannister {
		public function sleepWith($val)
		{
			if ($val instanceof Lannister)
				echo "Not even if I'm drunk !" . PHP_EOL;
			else
				echo "Let's do this." . PHP_EOL;
		}
	}
?>
