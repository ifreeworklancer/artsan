<?php

require_once('store.php');
require_once('functions.php');
require_once('views/base/header.php');

$sections = [
	'intro',
	'advantages',
	'directions',
	'cars',
	'order',
	'about',
	'vacancies',
];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');