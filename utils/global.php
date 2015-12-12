<?php

function trace($input) {
	if ( is_string($input) ) {
		$str = date("Y-m-d H:i:s") . ": $input".PHP_EOL;
	} else {
		$str = date("Y-m-d H:i:s") . ':' . PHP_EOL;
		$str .= print_r($input, true);
	}
	echo $input;
}