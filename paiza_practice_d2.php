<?php
// D027:nまでの和

// ある 2 以上の整数 n が与えられます。
// 1 から n までの 1 ずつ増加する数列の和を出力してください。

// 例えば以下のような入力の場合
// 10
// 数列は以下のようになり
// 1, 2, 3, 4, 5, 6, 7, 8, 9, 10
// 以下のように出力して下さい
// 55

$in = fgets(STDIN);
echo ($in+1)*($in/2);

// D026:一週間の予定

// あなたは1週間を全て休みにするために有給を申請することにしました。もともと決まっている休みもあります。
// 改行区切りで7日間のもともと決まった休みが、休みならば「yes」、休みでなければ「no」と入力されます。
// 有給申請しなくては行けない日数を出力してください。

// 例えば以下のような入力の場合
// yes
// yes
// yes
// yes
// no
// no
// yes
// 以下のように出力して下さい
// 2

$in = trim(fgets(STDIN));
//値が空でなければループして値を取得し続ける
while($in){
    $array[] = $in;
    $in = trim(fgets(STDIN));
}

$cnt = 0;
foreach($array as $inp){
    if($inp == "no"){
        $cnt++;
    }
}
echo $cnt;


// D025:数字の出力

// ある正の整数 n が入力されます。
// n を 0埋め3桁 で出力してください。
// 0埋め3桁 とは2桁以下の数字の場合、左側に0を加えて3桁にすることを言います。

// 例えば以下のような入力の場合
// 98
// 以下のように出力して下さい
// 098

$in = trim(fgets(STDIN));
$input = trim(strlen($in));
// var_dump($in);
// var_dump($input);
if($input == 2){
    echo "0".$in;
}elseif($input == 1){
    echo "00".$in;
}else{
    echo $in;
}

// D022:表面積の計算

// 正六面体の辺の長さ a が入力されるので表面積を出力して下さい。
// 辺の長さ a の正六面体の表面積は以下の式で求められます。

$i = fgets(STDIN);
echo $i*$i*6;

// D019:文字列からN番目

// 半角アルファベット文字列 s と 整数 n が入力されます。
// 文字列 s の1番左の文字を 1 文字目とし n 文字目のアルファベットを出力して下さい。
// 例えば
// paiza 3 と入力された場合
// i と出力して下さい。

$in = trim(fgets(STDIN));
$in = explode(" ",$in);
$word =$in[0];
$num = $in[1]-1;
$input = substr("$word","$num",1);
echo $input;

// D017:最大と最小

// 5個の数字 n_1, n_2, n_3, n_4, n_5 が改行区切りで与えられます。
// それらの数字の最大の数字、最小の数字を改行区切りで出力してください。

// 例えば
// 9
// 12
// 3
// 6
// 10
// と入力された場合

// 12
// 3
// と出力して下さい。



// var_dump($array);
$min = min($array);
$max = max($array);
echo $max."\n".$min;

// D016:N文字目まで出力

// 半角アルファベットで構成された文字列 S と正の整数 N 入力されます。
// 1文字目から N 文字目までを出力して下さい。

// 例えば
// abcdefg
// 4
// と入力された場合
// abcd
// と出力して下さい。

$in1 = fgets(STDIN);
$in2 = fgets(STDIN);
$out = substr($in1,0,$in2);
echo $out;

// D015:カウントダウン

// 正整数 n が入力されるので、 n から 1 まで 1 ずつカウントダウンするプログラムを作成してください。
// 例えば
// 3
// と入力された場合
// 3
// 2
// 1
// と出力して下さい。

$in = trim(fgets(STDIN));
for($i=$in; $i>0; $i--){
    echo $in."\n";
    $in--;
}
 ?>