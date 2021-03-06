<?php
// D013:割り算

// 整数 m と n 与えられます。
// m を n で割り算した商と余りを出力して下さい。
$in = trim(fgets(STDIN));
$inp = explode(" ",$in);
$a = $inp[0];
$b = $inp[1];
echo floor($a / $b)." ".($a % $b);
// 出力に時間かかったのは$inpに代入する際
// 間違って$inp[]としてしまったから

// $inp[]と書くと配列の末尾に値が複数はいってしまう
// $inpなら配列の値がそのままの形で入る（別画像参照）

// D012:絶対値を求めよ

// -100から100までの整数 n が与えられるので、絶対値を出力して下さい。
// 例えば
// -10
// と入力された場合
// 10
// と出力して下さい。

$in = fgets(STDIN);
if($in<0){
    echo $in * -1;
}elseif($in>0){
    echo $in;
}else{
    echo 0;
}

// D007:N倍の文字列

// 正の整数 N が標準入力から入力されるので、N 個の「*」を繋げた文字列を出力するプログラムを作成しましょう。
// 例えば N = 3の場合
// ***
// のように出力してください。
$in = fgets(STDIN);
for($i=0; $i<$in; $i++){
    echo "*";
}

// D009:西暦の計算

// 2つの西暦 a, b が半角スペース区切りの整数で入力されます。
// a から b が何年間あるか出力してください。
// 例えば 1990 2014 と入力された場合
// 24 と出力してください。
$in = fgets(STDIN);
$inp = explode(" ",$in);
echo $inp[1]-$inp[0];


// D006:単位の計算

// 距離 n とその単位 s がスペース区切りで与えられるので、すべての距離をmmに換算し出力してください。
// 入力される距離の単位は km, m, cm の3種類で、それぞれ以下のように換算出来ます。
// 1km = 1000m
// 1m = 100cm
// 1cm = 10mm

// 例えば
// 入力例 1 km と入力された場合、1×1000×100×10という式になり
// 出力例 1000000 と出力して下さい。

$in = fgets(STDIN);
$inp = explode(" ",$in);
$inp_num = trim($inp[0]);
$inp_tanni = trim($inp[1]);
// var_dump($inp[1]);
if($inp_tanni == "km"){
    echo $inp_num*1000000;
}elseif($inp_tanni == "m"){
    echo $inp_num*1000;
}else{
    echo $inp_num*10;
}

// D005:等差数列

// 以下のような数列を出力するプログラムを作りましょう。
// 5 8 11 14 17 20 23 26 29 32
// 最初の数字が5で、3ずつ増加していく事がわかります。
// 一般的にこれを初項5、公差3の等差数列といいます。

// このような数列を出力するプログラムを作りましょう。
// 初項 m が与えられ、公差 n が与えられるので 10番目までの数字を
// スペース区切りで出力するプログラムを作成してください。

$in = fgets(STDIN);
$inp = explode(" ",$in);
$inp_a = trim($inp[0]);
$inp_b = trim($inp[1]);

for ($i=0; $i<10; $i++){
    $ans[] = $inp_a + ($inp_b*$i);
}

$answer = implode(" ",$ans);
echo $answer;
 ?>