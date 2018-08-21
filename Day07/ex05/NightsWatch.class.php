<?php
		class NightsWatch implements IFighter {
		private $arr = array();
		public function recruit($val) {
			if ($val instanceof IFighter)
				$this->arr[] = $val;
		}
		public function fight() {
			foreach ($this->arr as $value) {
				$value->fight();
			}
		}
	}
?>
