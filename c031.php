<?php
$in = trim(fgets(STDIN));
    for($i=0; $i<$in; $i++){
        $detail[] = explode(" ",trim(fgets(STDIN)));
    }
    // var_dump($detail);

    $send = explode(" ",trim(fgets(STDIN)));
    $send2 = explode(":",$send[1]);
    // var_dump($send[0]);　//基準になる都市
    // var_dump($send2);
    // ⬆️何時何分

        // var_dump($detail[2][1]);
        $j=0;
        $jisa=0;
        foreach($detail as $detail2[]){
            if ($detail2[$j][0] == $send[0]){
                $jisa = $detail2[$j][1];
            }else{
                $j++;
            }
        }
        // var_dump($jisa); //シンガポールの基準時差 7
        // var_dump($send2[0]);

        $k=0;
        foreach($detail2 as $detail3[]){
            $detail4[] = $detail3[$k][1]-$jisa;
            $detail5[] = $detail4[$k] + intval($send2[0]);
                if($detail5[$k] < 0){
                    $detail5[$k] = $detail5[$k]+24;
                }elseif($detail5[$k] > 24){
                    $detail5[$k] = $detail5[$k]-24;
                }else{
                }
            $detail6[] = strval($detail5[$k]);
                if(strlen($detail6[$k]) == 1){
                    $detail7[$k] = sprintf('%02d', intval($detail6[$k]));
                    echo $detail7[$k].":".$send2[1]."\n";
                }else{
                    echo $detail6[$k].":".$send2[1]."\n";
                }
            $k++;
        }
        // var_dump($detail7); // 各都市の時差
?>