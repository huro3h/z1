<?php

	$in = trim(fgets(STDIN));
	$point = 0;

for($i=0; $i<$in; $i++){
    $ans = explode(" ",trim(fgets(STDIN)));
    $answer1 = str_split($ans[0]);
    $answer2 = str_split($ans[1]);

    if(strlen($ans[0]) != strlen($ans[1])){
    }elseif(strpos($ans[0],$ans[1]) !== false){
        $point++;
        $point++;
    }elseif(count(array_diff_assoc($answer1,$answer2)) == 1){
        $point++;
    }
}
echo $point;
 ?>