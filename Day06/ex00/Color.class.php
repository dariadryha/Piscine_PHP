<?php
	class Color
	{
		public static $verbose = False;
		public $red;
		public $green;
		public $blue;

		public function __construct($arr) {
			if (isset($arr['red']) && isset($arr['green']) && isset($arr['blue']))
			{
				$this->red = intval($arr['red'], 10);
				$this->green = intval($arr['green'], 10);
				$this->blue = intval($arr['blue'], 10);
				$this->print_res();
			}
			else if (isset($arr['rgb']))
			{
				$arr['rgb'] = intval($arr['rgb'], 10);
				$this->red = ($arr['rgb'] >> 16) & 0xFF;
				$this->green = ($arr['rgb'] >> 8) & 0xFF;
       			$this->blue = $arr['rgb'] & 0xFF;
       			$this->print_res();
			}
		}
		private function print_res()
		{
			if (Color::$verbose)
				echo sprintf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		}
		public function __destruct() {
			if (Color::$verbose)
				echo sprintf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		}
		public function __toString() {
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		}
		public static function doc() {
			echo file_get_contents('Color.doc.txt');
		}
		public function add($rhs) {
			return new Color(['red' => $this->red + $rhs->red,
				'green' => $this->green + $rhs->green,
				'blue' => $this->blue + $rhs->blue]
			);
		}
		public function sub($rhs) {
			return new Color(['red' => $this->red - $rhs->red,
				'green' => $this->green - $rhs->green,
				'blue' => $this->blue - $rhs->blue]
			);
		}
		public function mult($f) {
			return new Color(['red' => $this->red * $f,
				'green' => $this->green * $f,
				'blue' => $this->blue * $f]);
		}
	}
?>
