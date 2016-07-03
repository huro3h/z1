<?php
    $in = trim(fgets(STDIN)); //必要材料数
    for($i=0; $i<$in; $i++){
        $zai[] = explode(" ",trim(fgets(STDIN)));
    }
    // var_dump($zai);
    $in2 = trim(fgets(STDIN)); // 手持ち材料数
    for($j=0; $j<$in2; $j++){
        $te[] = explode(" ",trim(fgets(STDIN)));
    }
    // var_dump($te);
        foreach($zai as $zai2){
            $zairyoName = $zai2[0];
            $zairyoNum = $zai2[1];
            foreach($te as $te2){
                $foodName = $te2[0];
                $foodNum = $te2[1];

                if ($zairyoName == $foodName){
                    $possibleMake = $foodNum/$zairyoNum;
                    // if ($possibleMake > 0){
                        $possibleMakes[] = floor($possibleMake);
                    // }
                }
            }
        }
        $result = min($possibleMakes);
        if ($result == 0){
            echo "0";
        }else{
            echo $result;
        }
 ?>