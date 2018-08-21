<?php
	require_once '../ex00/Color.class.php';
	class Vertex
	{
		public static $verbose = False;
		private $_x;
		private $_y;
		private $_z;
		private $_w;
		private $_color;
		public function __construct($arr) {
			if (isset($arr['x']))
				$this->_x = $arr['x'];
			if (isset($arr['y']))
				$this->_y = $arr['y'];
			if (isset($arr['z']))
				$this->_z = $arr['z'];
			isset($arr['color']) ? $this->_color = $arr['color'] : $this->_color = new Color(['red' => 255, 'green' => 255, 'blue' => 255]);
			$this->_w = isset($arr['w']) ? $arr['w'] : 1.0;
			if (Vertex::$verbose)
				echo sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, ". $this->_color ." ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public function __toString() {
			if (Vertex::$verbose)
				return sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, ". $this->_color ." )", $this->_x, $this->_y, $this->_z, $this->_w);
			else
				return sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public function __destruct() {
			if (Vertex::$verbose)
				echo sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, ". $this->_color ." ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}

		public static function doc() {
			echo file_get_contents('Vertex.doc.txt');
		}

		public function set_x($val) {
			$this->_x = $val;
		}
		public function set_y($val) {
			$this->_y = $val;
		}
		public function set_z($val) {
			$this->_z = $val;
		}
		public function set_w($val) {
			$this->_w = $val;
		}
		public function set_color($val) {
			$this->_color = $val;
		}
		public function get_x() {
			echo $this->_x;
		}
		public function get_y() {
			echo $this->_y;
		}
		public function get_z() {
			echo $this->_z;
		}
		public function get_w() {
			echo $this->_w;
		}
		public function get_color() {
			echo $this->_color;
		}
	}
?>
