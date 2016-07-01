<?php
	$in = explode(" ",trim(fgets(STDIN)));
	$num = $in[0]; //箱の総数
	$ball = $in[1]*2; //ボールの直径
	$j=1;

	for($i=0; $i<$num; $i++){
	    $box = explode(" ",trim(fgets(STDIN)));
	    // var_dump($box);
	    if ($box[0]>=$ball && $box[1]>=$ball && $box[2]>=$ball){
	        echo $j."\n";
	        $j++;
	    }else{
	        $j++;
	    }
}
 ?>