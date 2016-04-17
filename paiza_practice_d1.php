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

 ?>