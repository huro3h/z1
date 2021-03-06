<?php

// C026:ウサギと人参
// Rabbit社の社長はウサギが大好きで、 社内で1匹のウサギを飼育することにしました。
// ウサギが人参を好むことは広く知られています。 また、ウサギに詳しい社員によると、 人参は糖分が多いため与えすぎるのは良くないようです。

// そこで、人参は1日1本だけ与えることにし、 特に糖分が許容範囲内で質量が大きい人参を選ぶことにしました。

// プログラマーであるあなたはRabbit社の依頼を受け、 1 から N で番号付けられた N 個の人参のデータを入力として、 糖分が許容範囲内で質量の最も大きい人参を見つけるプログラムを作成することになりました。

// 糖分には基準値Sと許容誤差 p があり、 糖分が S - p 以上 S + p 以下ならば許容範囲内となります。
// また、糖分が許容範囲内で質量の最も大きい人参 が複数ある場合は、それらのうち番号の最も小さいものを知ることができれば十分です。

// 入力は以下のフォーマットで与えられます。

// N S p
// m_1 s_1
// ...
// m_N s_N

// 1行目には3つの整数 N, S, p が入力されます。 それぞれ、人参のデータの数、目安となる糖分、許容誤差を表します。

// 続く N 行には N 個の人参のデータが与えられます。
// ここで、人参には 1 から N の番号が付いているものとし、 m_i、s_i はそれぞれ番号 i の人参の質量、糖分を表す整数です。

// 糖分が許容範囲内で質量の最も大きい人参の番号を1行に出力してください。

// 糖分が許容範囲内で質量の最も大きい人参が複数ある場合は、それらの番号のうち最も小さいものを出力してください。
// もし、糖分が許容範囲内で質量の最も大きい人参が見つからなかった場合は、"not found"と1行に出力してください。

$in = trim(fgets(STDIN));
$in2 = explode(" ",$in);
// var_dump($in2);

$i = $in2[0]; // 人参の数
$sweet = $in2[1]; // 基準糖度
$allow = $in2[2]; // 許容範囲

for($j=0; $j<$i; $j++){
    $array[] = trim(fgets(STDIN));
}
// var_dump($array);

for($j=0; $j<$i; $j++){
    $array2[] = explode(" ",$array[$j]);
}
// var_dump($array2);
// var_dump($array2[0][0]);
$k = 0;
for($j=0; $j<$i; $j++){
    if($sweet-$allow <= $array2[$j][1] && $sweet+$allow >= $array2[$j][1]){
        $array3[$j][0] = $k+1;
        $array3[$j][1] = "OK";
        $array3[$j][2] = $array2[$j][0];
        $array4[] = $array2[$j][0];
    } else {
        $array3[$j][0] = $k+1;
        $array3[$j][1] = "NG";
        $array3[$j][2] = -1;
        $array4[] = -1;
    }
    $k++;
}

// var_dump($array4);

$max_weight = max($array4);
// var_dump($max_weight);

$bangou = array_search($max_weight,$array4);
// var_dump($bangou);

if($max_weight < 0){
    echo "not found";
}else{
    echo $bangou+1;
}