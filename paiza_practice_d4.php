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

// D041:本棚選び
// あなたは新しい本棚を買おうと検討しています。
// 持っている本の幅を合計したもの n (cm)、検討している本棚の段数 d 、本が収まる幅 e (cm)がそれぞれ半角スペース区切りで与えられます。

// 例えば、本の幅を合計したものが 400(cm)、検討している本棚の段数が 5、本が収まる幅が 85 (cm)の場合、以下の様な入力になり
// 400 5 85
// 各段の幅を合計したものは 85 かける 5 で 425 (cm)となり、400 (cm)の本は収まるので以下のように出力して下さい。
// OK

$in = fgets(STDIN);
$inp = explode(" ",$in);

// print_r($inp);
$a = $inp[0];
$b = $inp[1];
$c = $inp[2];

if($a <= $b*$c){
    echo "OK";
} else {
    echo "NG";
}

// D042:行列
// ある 4 つの数値を以下のような形式で並べたものを 2 次行列とよびます。

// | a  b |
// | c  d |

// この 2 次行列に対し、a × d - b × c を計算した値をこの 2 次行列の行列式とよびます。
// ある 2 次行列が与えられたときに、その行列式を求めるプログラムを作成してください。
// 例)

// | 1  2 |
// | 3  4 |

// 上のような行列の行列式は、1 × 4 - 3 × 2 = -2 となります(入力例1)。

$in1 = trim(fgets(STDIN));
$in2 = trim(fgets(STDIN));

// var_dump($in1);
// var_dump($in2);

$in3 = explode(" ",$in1);
$in4 = explode(" ",$in2);
// var_dump($in3);
// var_dump($in4);

$in5 = $in3[0]*$in4[1];
$in6 = $in3[1]*$in4[0];

$in7 = $in5 - $in6;
echo $in7;
 ?>