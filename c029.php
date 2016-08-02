<?php
$in = explode(" ",trim(fgets(STDIN)));
$days = $in[0];//10
$trip = $in[1];//4

$checkdays = $days - $trip; //検索回数6

	for($i=0; $i<$days; $i++){
	    $data[] = explode(" ",trim(fgets(STDIN)));
	}
$z = 0;
	for($j=0; $j<$checkdays; $j++){

	    for($k=0; $k<$trip; $k++){
	        $possible[] =+ $data[$k + $z][1];
	    }

	    $z++;
	    $kekka[] = array_sum($possible);
	    unset($possible);
	}
	// var_dump($data);
	// var_dump($possible);
	$tes = array_search(min($kekka),$kekka);
	// var_dump($tes);
	echo $data[$tes][0]." ".$data[$tes+$trip-1][0];
	// echo $z;
