<?php
	$in = 60*trim(fgets(STDIN)); // 3000秒
	$songs = trim(fgets(STDIN)); // 9曲

	$total = 0;
	$num = 0;
	    for($i=0; $i<$songs; $i++){
	        $total += trim(fgets(STDIN));
	            if($in > $total){
	                $num++;
	            }
	    }

	    if ($songs == $num){
	        echo "OK";
	    }else{
	        echo $num;
	    }
 ?>