<?php
	$dates = file_get_contents('dates.txt');
	
	$date = explode("\r", $dates);
	
	foreach($date as $d) {
	
		echo date('M d, Y', $d) . "\r\n"; 
		
	}