<?php
	$in = trim(fgets(STDIN)); // カードの数
    for($i=0; $i<$in; $i++){
        $cardNumber = str_split(trim(fgets(STDIN)));
        unset($cardNumber[15]);
        // var_dump($cardNumber);
        $kisu = array_map('current', array_chunk($cardNumber, 2)); // 奇数抜き出し
        $gusu = array_map('current', array_chunk(array_slice($cardNumber, 1), 2)); // 偶数抜き出し
        // var_dump($gusu);
        //偶数の処理
        foreach($kisu as $kisu2){
            $check = strlen($kisu2*2);
            // var_dump($check);
            if($check == 2){
                $syori = str_split($kisu2*2);
                // var_dump($syori);
                $ans[] = $syori[0] + $syori[1];
            }else{
                $ans[] = $kisu2*2;
            }

        }
            // var_dump($ans);
            $totalkisu = array_sum($ans);
            $totalgusu = array_sum($gusu);
            // var_dump($totalgusu);
            // echo "\n";
            // var_dump($totalkisu);

            $result = $totalkisu+$totalgusu;
                if($result < 10 && $result>90){
                    $result += 10;
                }
            $test = str_split($result);
            // var_dump($result);
            $result2 = 10-$test[1];
                if($result2 == 10){
                    echo "0"."\n";
                }else{
                    echo $result2."\n";
                }
            unset($ans);
    }
 ?>