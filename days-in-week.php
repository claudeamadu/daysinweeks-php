<?php
/**
 * Days In Week
 * Licensed under: SEE LICENSE IN
 */
/**
 * Days In Week
 * @author Claude Obiri Amadu
 * @license The MIT License (MIT)
 */
$y = 0;//Days of week
$b = 7;//Days in a week
$x = 0;//Week
$maxDays=date('t');//Max days in current month
for ($days=0;$days<=($maxDays/7);$days++) {
	$x++;
	if($x <= $maxDays){
		$y = $x*$b;
		echo 'Week '.$x.' = ';
		foreach(range($y-6,$y) as $i){
			if($i <= $maxDays){
				echo $i.' ';
			}
		}
		echo '<br/>';
	}  
}
?>