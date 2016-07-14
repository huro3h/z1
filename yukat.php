<?php
	$num = trim(fgets(STDIN));

		for($i=0; $i<$num; $i++){
		    $detail[] = explode(" ",trim(fgets(STDIN)));
		}
		// var_dump($detail);

		$temp = 0;
		$cost1 = 0;
		$cost2 = 0;
		$actionNum = 0;

		for($i=0; $i<24; $i++){
		    if($actionNum < $num){
		        if($i == $detail[$actionNum][0]){
		            if($detail[$actionNum][1] == "in"){
		                $temp += 5; //inで+5度
		            }else{
		                $temp += 3; //outで+3度
		            }
		            $actionNum++;

		        }
		    }

		    if($temp == 0){
		        $cost1++;
		    }else{
		        $cost2++;
		    }

		    if($temp != 0){
		        $temp -= 1;
		    }
		    // echo $temp;
		}

		$totalcost = $cost1 + ($cost2*2);
		echo $totalcost;
 ?>