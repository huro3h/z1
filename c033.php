<?php
	$in = fgets(STDIN);
    // コール数
    $ballcount = 0;
    $strikecount = 0;

    for($i=0; $i<$in; $i++){
        $call = trim(fgets(STDIN));
        if(strstr($call, 'ball')){
            $ballcount++;
            if($ballcount < 4){
                echo "ball!"."\n";
            }
            if($ballcount == 4){
                echo "fourball!";
            }
        }

        if(strstr($call, 'strike')){
            $strikecount++;
            if($strikecount < 3)
                echo "strike!"."\n";
            }
            if($strikecount == 3){
                echo "out!";
        }
        unset($call);
    }
 ?>