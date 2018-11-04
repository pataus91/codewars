<?php

function count_smileys($arr): int {

	$eyes = [':', ';'];
	$nose = ['-', '~'];
	$smile = [')', 'D'];
	$result = 0;

  	foreach ($arr as $value) {
  		$firstChar = substr($value, 0, 1);
  		if (in_array($firstChar, $eyes)) { 			
  			if (strlen($value) === 2) {
  				if (in_array(substr($value, 1, 1), $smile)) {
  					$result += 1;
  				}
  			} elseif (strlen($value) === 3) {
  				if (in_array(substr($value, 1, 1), $nose) && in_array(substr($value, 2, 1), $smile) ) {
  					$result += 1;
  				}	
  			}
		}
	}
	return $result;
}




count_smileys([':D',':~)',';~D',':)']);