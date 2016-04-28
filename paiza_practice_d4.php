<?php

// D040:連休の天気
// あなたは7日間の連休をもらいましたが、降水確率が 30% 以下ならば外に出掛ける事に決めました。
// 7日間の降水確率(%)が改行区切りで入力されるので、出掛ける日数の合計を出力してください。

// 例えば
// 13
// 0
// 15
// 30
// 89
// 100
// 31
// と与えられた場合
// 4
// と出力するプログラムを作成してください。

// ごめん邪道やわ (*´-`;
$in1 = trim(fgets(STDIN));
$in2 = trim(fgets(STDIN));
$in3 = trim(fgets(STDIN));
$in4 = trim(fgets(STDIN));
$in5 = trim(fgets(STDIN));
$in6 = trim(fgets(STDIN));
$in7 = trim(fgets(STDIN));

$a[] =$in1;
$a[] =$in2;
$a[] =$in3;
$a[] =$in4;
$a[] =$in5;
$a[] =$in6;
$a[] =$in7;

// var_dump($a);
$i = 0;
foreach($a as $ans){
    if($ans < 31){
        $i++;
    }
}
echo $i;
 ?>