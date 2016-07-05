<?php
    $carryMax = trim(fgets(STDIN)); // 運べる枚数
    $faxNum = trim(fgets(STDIN)); // faxが届く回数
    // var_dump($carrymax); // 50
    // var_dump($faxnum); // 5
        for($i=0; $i<$faxNum; $i++){
            $faxData = explode(" ",trim(fgets(STDIN)));
            $faxDataPerHour[$faxData[0]] += $faxData[2];
        }
        // var_dump($faxData);
        // var_dump($faxDataPerHour);

        $total = 0; // 運ぶ合計回数

        foreach ($faxDataPerHour as $faxData) {
        	$total += ceil($faxData / $carryMax);
        }

        echo $total;
 ?>