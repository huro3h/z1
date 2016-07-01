<?php
    $in = explode(" ",trim(fgets(STDIN)));
    $x = $in[0]; //x座標
    $y = $in[1]; //y座標
    $noise = $in[2]; //騒音の大きさ

    $p_num = trim(fgets(STDIN));
    // var_dump($p_num);

    for($i=0; $i<$p_num; $i++){
        $iti = explode(" ",trim(fgets(STDIN)));
        $px = $iti[0];
        $py = $iti[1];
        var_dump($iti);
        $res = ($px-$x)*($px-$x) + ($py-$y)*($py-$y);
        if($res >= $noise*$noise){
            echo "silent";
            echo "\n";
        }else{
            echo "noisy";
            echo "\n";
        }
    }
 ?>