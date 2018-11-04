<?php

function count_smileys($arr): int {

  	foreach ($arr as $value) {
		if (substr($value, 0, 1) === ':' | substr($value, 0, 1) === ';') {
			
		}
	}
}

count_smileys([':D',':~)',';~D',':)']);