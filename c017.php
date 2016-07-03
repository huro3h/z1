<?php
    $oya = explode(" ",trim(fgets(STDIN)));
    $num = trim(fgets(STDIN)); // 子の数
    for($i=0; $i<$num; $i++){
        $ko = explode(" ",trim(fgets(STDIN)));
        if($oya[0] > $ko[0]){
            echo "High";
            echo "\n";
        }elseif($oya[0] < $ko[0]){
            echo "Low";
            echo "\n";
        }elseif($oya[0] == $ko[0]){
            if($oya[1] < $ko[1]){
                echo "High";
                echo "\n";
            }else{
                echo "Low";
                echo "\n";
            }
        }
    }
 ?>