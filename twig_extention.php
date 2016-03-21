<?php

abstract class twig_extention {
	protected $twig = null;
	
	protected $extention_list = array();
	
	public function __construct(&$twig) {
		$this->twig = $twig;
		
		$this->load_extentions();
	}
	
	protected function load_extentions() {
		foreach($this->extention_list as $extention) {
			$fn = $this->$extention
			$apply_filter = new Twig_SimpleFilter($extention, $fn);
			$this->twig->addFilter($apply_filter);
		}
	}
	
	protected function has_bit($num, $bit) {
		return (pow(2, $bit) & $num) == pow(2, $bit) ? true : false;
	}
}

?>