<?php

function count_smileys($arr) {

	$eyes = [':', ';'];
	$nose = ['-', 'D'];
	$smile = [')', 'D'];

  	foreach ($arr as $value) {
  		$firstChar = substr($value, 0, 1);
		if (in_array($firstChar, $eyes)) {
			
		}
	}
}

count_smileys([':D',':~)',';~D',':)']);