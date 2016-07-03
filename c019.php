<?php
	$in = trim(fgets(STDIN)); // 総数
	for($i=0; $i<$in; $i++){
	    $in2 = trim(fgets(STDIN)); // 数字の値
	    for($j=1; $j<$in2; $j++){
	        $res = $in2/$j; // 割り切れる数(整数)か判定
	        if (is_int($res) == true){
	            $num[] = $j; // 整数なら配列に代入
	            // var_dump($num);
	        }

	    }
	    $res3 = array_sum($num);
	    if($res3 == $in2){
	        echo "perfect";
	        echo "\n";
	    }elseif($in2 - $res3 == 1){
	        echo "nearly";
	        echo "\n";
	    }else{
	        echo "neither";
	        echo "\n";
	    }
	    unset($num); //計算が終わったら次の為に配列を空に
	}
 ?>