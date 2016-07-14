<?php
	$in = trim(fgets(STDIN)); // 個数

		for($i=0; $i<$in; $i++){
		    $detail[] = explode(" ",trim(fgets(STDIN)));
		}
		// var_dump($detail);
		$a=0;

		foreach($detail as $detail2[]){
		    if($detail2[$a][0] == "0"){
		        $case0[] = intval($detail2[$a][1]);
		    }elseif($detail2[$a][0] == "1"){
		        $case1[] = intval($detail2[$a][1]);
		    }elseif($detail2[$a][0] == "2"){
		        $case2[] = intval($detail2[$a][1]);
		    }else{
		        $case3[] = intval($detail2[$a][1]);
		    }
		    $a++;
		}
		    $case0 = 5*intval(floor(0.01*array_sum($case0)));
		    $case1 = 3*intval(floor(0.01*array_sum($case1)));
		    $case2 = 2*intval(floor(0.01*array_sum($case2)));
		    $case3 = 1*intval(floor(0.01*array_sum($case3)));

		    echo $case0+$case1+$case2+$case3;
 ?>