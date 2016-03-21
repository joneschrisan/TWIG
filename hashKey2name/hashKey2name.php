<?php

class dates extends twig_extention {
	
	const UnderScore2Space	= 2;
	const UCWords			= 4;
	const UCFirst			= 8;
	
	protected $extention_list = array("hashKey2name");
	
	public function __construct(&$twig) {
		parent::__construct($twig);
	}
	
	public function hashKey2name($name, $type = 6) {
		$out = $name;
		if ($this->has_bit($type, 1)) {
			$out = str_replace("_", " ", $out);
		}
		if ($this->has_bit($type, 2)) {
			$out = ucwords($out);
		}
		if ($this->has_bit($type, 3)) {
			$out = ucfirst($out);
		}
		return $out;
	}
}

?>