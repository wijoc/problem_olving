<?php
/* 
	Function : Looking First Recurring Character
	From YT Channel : CS Dojo - Google Coding interview Question & Answer #1: First Recurring Character
	Link : youtu.be/GJdiM-muYqc

*/

	function first_recurring_str($string){
		/* Turn string to array */
		$array_string = str_split($string, 1);

		/* Set a dictionary or hash table */
		$count_char = array();

		/* Loop trough given string */
		foreach($array_string as $key){
			if($count_char[$key] >= 1){
				$recurring_char = $key;
			} else {
				$count_char[$key] += 1;
				$recurring_char = 'No recurring character';
			}
		}

		return $recurring_char;
	}

	echo first_recurring_str('ABCDEFBAF');
?>