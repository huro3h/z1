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
 ?>