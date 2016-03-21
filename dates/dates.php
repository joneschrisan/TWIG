<?php

function format_date($date, $format) {
	$d = new DateTime($date);
	return $d->format($format);
}

$filter_date_sql = new Twig_SimpleFilter(
	"dateSQL",
	function($date) {
		return $date ? format_date($date, "Y-m-d") : null;
	}
);
$filter_datetime_sql = new Twig_SimpleFilter(
	"dateSQL",
	function($date) {
		return $date ? format_date($date, "Y-m-d H:i:s") : null;
	}
);

$filter_date_usa = new Twig_SimpleFilter(
	"dateUSA",
	function($date) {
		return $date ? format_date($date, "m/d/Y") : null;
	}
);
$filter_datetime_usa = new Twig_SimpleFilter(
	"dateSQL",
	function($date) {
		return $date ? format_date($date, "m/d/Y H:i:s") : null;
	}
);

$filter_date_uk = new Twig_SimpleFilter(
	"dateUK",
	function($date) {
		return $date ? format_date($date, "d/m/Y") : null;
	}
);
$filter_datetime_uk = new Twig_SimpleFilter(
	"dateSQL",
	function($date) {
		return $date ? format_date($date, "d/m/Y H:i:s") : null;
	}
);

$twig->addFilter($filter_date_sql);
$twig->addFilter($filter_datetime_sql);
$twig->addFilter($filter_date_usa);
$twig->addFilter($filter_datetime_usa);
$twig->addFilter($filter_date_uk);
$twig->addFilter($filter_datetime_uk);

?>