<?php
	$in = explode(" ",trim(fgets(STDIN)));
	// var_dump($in[0]);
	// var_dump($in[1]);
	// var_dump($in[2]);
	$first = $in[0] - ($in[0]*($in[1]*0.01));
	// var_dump($first);
	$second = $first - ($first*($in[2]*0.01));
	echo $second;
	// var_dump($second);
 ?>