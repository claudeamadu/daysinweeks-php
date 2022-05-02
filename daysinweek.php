<?php
/**
 * Days In Week
 * Licensed under: SEE LICENSE IN https://github.com/claudeamadu/daysinweeks-php/blob/main/LICENSE
 */
/**
 * Days In Week
 * @author Claude Obiri Amadu
 * @license GNU General Public License v3.0
 */
function daysinweek($maxDays,$month,$year,$format){
	$y = 0;//Days of week
	$b = 7;//Days in a week
	$x = 0;//Week
	if($maxDays == 0){ $maxDays=date('t'); }//Max days in current month
	if($month == 0){ $month=date('m'); }//current month
	if($year == 0){ $year=date('Y'); }//current year
	if($format == 0){ $format='Y-m-d'; }//current year
	$parent = [];
	$parent['month'] = $month;
	$parent['year'] = $year;
	$data = [];
	for ($days=0;$days<=($maxDays/7);$days++) {
		$x++;
		if($x <= $maxDays){
			$y = $x*$b;
			$week = [];
			foreach(range($y-6,$y) as $i){
				if($i <= $maxDays){
					$day = $i;
					$date  = new DateTime("$year-$month-$day");
					$week['day '.$i] = $date->format("$format");
				}
			}
			$data['week '.$x] = $week;
		}  
	}
	$parent['results'] = $data;
	return json_encode($parent);
}
?>