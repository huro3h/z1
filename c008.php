<?php
    $in = explode(" ",trim(fgets(STDIN)));
    $in2 = trim(fgets(STDIN));

    $tag1 = $in[0];
    $tag2 = $in[1];
    $pa = "/$tag1(.*?)$tag2/";
    $num = preg_match_all($pa, $in2, $res,PREG_SET_ORDER);
    // var_dump($result);
    // var_dump($result[0][1]);
    $counter = count($res);
    for($i=0; $i<$counter; $i++){
        if(isset($res[$i][1]) && !empty($res[$i][1])){
            echo $res[$i][1];
            echo "\n";
        }else{
            echo "<blank>";
            echo "\n";
        }
    }
 ?>