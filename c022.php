<?php
	$in = trim(fgets(STDIN)); // 日数
    $num = 0;
    for($i=0; $i<$in; $i++){
        $data = explode(" ",trim(fgets(STDIN)));
        $start[] = $data[0];
        $end[] = $data[1];
        $high[] = $data[2];
        $low[] = $data[3];
        $num++;
    }
    // var_dump($start);

    echo $start[0]." ";
    echo $end[$num-1]." ";
    echo max($high)." ";
    echo min($low);
 ?>