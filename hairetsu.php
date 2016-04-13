<?php
$team = array("a","b","c","d");
// print_r ()内の配列を全て表示する関数
print_r($team);

$a1 = "test1";
$a2 = "test2";
$a3 = "test3";
$test = array("$a1","$a2","$a3");
print_r($test);
// 配列の中に変数を代入し、それを表示させることも可能

// 標準入力から５行分の入力を配列に代入する
for($i=0; $i < 5; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述
// $team の3つ目の要素を出力してください
echo $team[2];

// 標準入力から3行分の入力を配列に代入する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述
// $team に「狩人」という要素追加
$team[] = "狩人";
print_r($team);

// 標準入力から3行分の入力を配列に代入する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team の冒頭の要素を削除
unset($team[0]);
print_r($team);

 ?>