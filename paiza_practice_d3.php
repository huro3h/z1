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


 ?>