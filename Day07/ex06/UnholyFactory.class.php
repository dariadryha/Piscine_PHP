<?php
	class UnholyFactory {
		private $mas = array();
		public function absorb($val)
		{
			if (!($val instanceof Fighter))
				echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
			else if ($this->mas[$val->type])
				echo "(Factory already absorbed a fighter of type " . $val->type . ")" . PHP_EOL;
			else
			{
				$this->mas[$val->type] = $val;
				echo "(Factory absorbed a fighter of type " . $val->type . ")" . PHP_EOL;
			}
		}
		public function fabricate($val)
		{
			if ($val != "foot soldier" and $val != "assassin" and $val != "archer")
				echo "(Factory hasn't absorbed any fighter of type " . $val . ")" . PHP_EOL;
			else
			{
				echo "(Factory fabricates a fighter of type " . $val . ")" . PHP_EOL;
				return ($this->mas[$val]);
			}
			return (False);
		}
	}
?>
