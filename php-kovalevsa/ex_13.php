<?php
$array = [
	0 => "",
	1 => "0",
	2 => 1,
	3 => -2,
	4 => "abc",
	5 => 2.3e5,
	6 => [],
	7 => array(1,2,3),
	8 => "false",
	9 => null,
	10 => 0,
	11 => true,
	12 => false
];

foreach($array as $k){ // для удобства решил перебирать в цикле
	var_dump((bool) $k);
}