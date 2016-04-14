<?php
// foreachで配列の値を取り出す
// (print_rは要素を丸ごと出力するのに対し)
// 配列を1つずつ順番に、かつ全部取り出し要素ごとに何か処理をしたい場合
// ex.配列に都道府県名を入れておき、プルダウンメニューで表示
// forcach(配列 as バリューを代入する変数)

$array = array(34,23,56,76);
foreach($array as $num){
    echo $num."\n";
}

 // 演習課題「foreachループの練習２」

// 右側のエディターエリアのプログラムを元に、
// 配列のvalueに代入されている全ての数値の合計を出力

// $arrayのvalueに代入されている
// 全ての数値の合計を出力してみましょう。

$input = trim(fgets(STDIN));
$array = explode(",", $input);
// var_dump($array);
$num = 0;
foreach($array as $a){
    $num+= $a;
}
echo $num;

// 配列の値の合計値をarray_sum関数を使って求める(別回答)
// array_sum関数 配列内の合計値を出力する関数
$input = trim(fgets(STDIN));
$array = explode(",", $input);
// var_dump($array);
// foreach($array as $a){
    $total = array_sum($array);
// }
echo $total;
?>