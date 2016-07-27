<?php
$in = explode(" ",trim(fgets(STDIN)));
$funnum = $in[0]; // ファンの数
$livenum = $in[1]; // ライブ回数

for($i=0; $i<$livenum; $i++){
    $benefits[$i] = explode(" ",trim(fgets(STDIN)));
}
// var_dump($benefits);

$j=0;
foreach($benefits as $total){
    for($k=0; $k<$funnum; $k++){
        $totals += intval($benefits[$j][$k]);
    }
    $j++;
    $totals2[] = $totals;
    unset($totals);
}

foreach($totals2 as $total3){
    if($total3 > 0){
        $profit[] = $total3;
    }else{
    }
}
$result = array_sum($profit);

if ($result > 0){
    echo $result;
}else{
    echo "0";
}
 ?>