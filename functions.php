<?php function tsl($de, $en, $ru){
	echo $ru;
}

function get_species($i){
	$i = intval($i);
	$arr = array('другой','человек','полуэльф','эльф','цверг','гоблин','орк','полуорк','ахац','другой');
	return $arr[$i];
}

function get_age($y, $m, $d){
	$age = date('y') + 1023;
	$age = $age - intval($y);
	return $age;
}

function calculate($arr){
	$hero = $arr; $r = $hero['race'];
	$mods = array(0, 5, 5, 2, 8);
	$hero['LE'] = $hero['CO'] * 2 + $mods[$r];
	$hero['AE'] = 20;
	return $hero;
}
?>