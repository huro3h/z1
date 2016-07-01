<?php
	$num = trim(fgets(STDIN)); //買い物日数
	for($i=0; $i<$num; $i++){
	    $detail = explode(" ",trim(fgets(STDIN)));
	    $day = $detail[0]; //買い物日
	    $price = $detail[1]; //買い物金額
	    if(strpos($day,'3') !== false){
	        $total[] = floor($price*0.03); //ポイント3倍デー
	    }elseif(strpos($day,'5') !== false){
	        $total[] = floor($price*0.05); //5倍デー
	    }else{
	        $total[] = floor($price*0.01); //普通の日
	    }
	}
	// var_dump($total);
	$a_total=array_sum($total);
	// var_dump($a_total);
	print $a_total;
 ?>