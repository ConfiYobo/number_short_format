<?php

function number_format_short( $n ) {
    //If the amount is greater but lesser than 1 thousand
	if ($n > 0 && $n < 1000)
    {
		$n_format = number_format($n, 2); 
		$suffix = '';
	}
    //the amount is within 100 thousand
    else if ($n >= 1000 && $n < 1000000)
    {
		$n_format = number_format($n, 2); //
		$suffix = '';
	}
    //the amount is upto a million
    else if ($n >= 1000000 && $n < 1000000000)
    {
		// 1m-999m
		$n_format = floor($n / 1000000); //do aproximity
		$suffix = 'M'; //add suffix
	}
    //the amount is upto a billion
    else if ($n >= 1000000000 && $n < 1000000000000)
    {
		// 1b-999b
		$n_format = floor($n / 1000000000); //do aproximity
		$suffix = 'B'; //add suffix
	}
    //the amount is upto a trillion
    else if ($n <= 100000000000000)
    {
		$n_format = floor($n / 1000000000000);//do aproximity
		$suffix = 'T';
	}
    else
    {
        $n_format = 0;
		$suffix = '';
    }

	return !empty($n_format . $suffix) ? $n_format . $suffix : 0;
}

