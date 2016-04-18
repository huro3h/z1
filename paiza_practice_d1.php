<?php
// 2つの正の整数がa, bが半角スペース区切りで入力されるのでaとbを足した数を出力。
// https://paiza.jp/learning/addition

$input = fgets(STDIN);
$in = explode(" ",$input);
echo array_sum($in);

// 改行区切りで正の整数nがi個入力されるので小さい順に改行区切りで出力。
// https://paiza.jp/learning/sort-number

while($input = fgets(STDIN)){
    $input = trim($input);
    $array[] = $input;
}
unset($array[0]);
sort($array);
foreach($array as $num){
    echo $num."\n";

}

// あなたは1対1で戦う競技の大会を開くことにしました。
// N 人の選手で総当り対戦を行う場合、何回の対戦が行われるか出力して下さい。
// N 人の総当り戦では N 人がそれぞれ自分自身以外と対戦します。
// また、自分自身から見た結果と、相手側から見た結果があるで N × (N - 1) / 2で求められます。
// N 人の選手で総当り対戦を行う場合、何回の対戦が行われるか出力して下さい。
$in = fgets(STDIN);
echo $in*($in-1)/2;

// D010:Eメールアドレス
// Eメールアドレスはローカル部とドメインを「@」を繋いだ文字列で表されます。
// ローカル部を s ,ドメインを t として、それぞれ長さ n の文字列が改行区切りで入力されます。

// 以下の構文に沿った文字列を出力してください。
// s(ローカル部)@t(ドメイン)
// 例えば
// info
// paiza.jp
// のような入力の場合

// info@paiza.jp
// と出力して下さい。
$in1 = trim(fgets(STDIN));
$in2 = trim(fgets(STDIN));
echo $in1.'@'.$in2;

// D035:日付のデータ
// スペース区切りで西暦 y 、月 m 、日 d が入力されます。
// "/" 区切りで文字列として出力して下さい。
// 例えば
// 2016 2 12
// と入力された場合
// 2016/2/12
// と出力して下さい。
$in = fgets(STDIN);
$inp = explode(" ",$in);
// var_dump($inp);
echo "$inp[0]/$inp[1]/$inp[2]";

// D002:数の比較
// ある正の整数aとbがスペース区切りで入力されます。
// aとbを比較し大きい方の値を出力して下さい。aとbが同じ場合は「eq」と出力して下さい。

// 70点(´・ω・`)
$in = fgets(STDIN);
$inp = explode(" ",$in);
// var_dump ($inp);
// echo $inp[0];
// echo $inp[1];

if($inp[0] == $inp[1]){
    echo "eq";
}elseif($inp[0] < $inp[1]){
    echo $inp[1];
}else{
    echo $inp[0];
}

//100点


 ?>