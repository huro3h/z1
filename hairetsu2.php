<?php
// ＃07:配列を使ったランダムくじ引き
// このチャプターでは、標準入力から参加者を読み込み、ランダムで人を選出する、
// ランダムくじ引きを作成します。参加人数が変わっても対応できるやり方を学びます。

$input = trim(fgets(STDIN));
$member = explode(",",$input);
print_r($menber);

// countする際に-1してやることで
// 参加者を正確にcountする事が可能になる
$max = count($menber)-1;
$key = rand(0,$max);

echo $key."\n";
echo $member[$key]
// $member[]の中に$key(番号)を入れてやることで
// 値の表示(名前)が可能になる。


// 演習課題「おみくじを作ろう」

// 標準入力でカンマ区切りのおみくじ結果データが入力されます。（例：大吉,吉,凶）
// 入力された結果を配列に代入し、その内容をランダムで出力する
// プログラムを作成してください。
// 出力は配列尾内容をprint_rで出力し、その次の行でおみくじの結果を表示してください。
// 標準入力から1行取得
$input = trim(fgets(STDIN));
// カンマで分割して配列に代入
$member = explode(",",$input);
// 配列の中身を出力
print_r($member);
// ランダムの上限値を計算して変数に代入
$num = count($member)-1;
// ランダム出力
$max = rand(0,$num);

// var_dump($max);
echo $member[$max];

?>