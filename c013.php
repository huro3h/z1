<?php
	$hate = trim(fgets(STDIN)); // 嫌いな数字
	$num = trim(fgets(STDIN)); // 部屋数
	$j=0;

	for($i=0; $i<$num; $i++){
	    $r_number = trim(fgets(STDIN)); //部屋番号
	    if (strpos($r_number,$hate) === false){
	        echo $r_number."\n";
	        $j++;
	    }
	}
	// echo $j;
	if ($j == 0){
	    echo "none";
	}
 ?>