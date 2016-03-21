<?php

$apply_filter = new Twig_SimpleFilter('apply_filter', function($filter) {
	return $filter;
});

$twig->addFilter($apply_filter);

?>