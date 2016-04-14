<?php
// 配列の並び替え
$item = array("イージスシールド", "ウィンドスピア", "アースブレイカー");
print_r($item);
sort($item);
// sort関数 先頭文字の若い順から配列内の並び替えをする
print_r($item);

rsort($item);
// rsort関数 sortの逆
print_r($item);

// 演習課題「データを取得して並べ替えて出力してみよう１」

// 標準入力で複数行のデータが与えられます。
// 全てのデータを取得し、小さい順に並べ変えてprint_rで
// 出力してみましょう。

$input = fgets(STDIN);
while($input){
    $array[] = trim($input);
    $input = trim(fgets(STDIN));
}
    // var_dump($array);
    sort($array);
    print_r($array);

// 演習課題「データを取得して並べ替えて出力してみよう２」

// 標準入力で１行のcsv形式データ（カンマ区切り）が与えられます。
// カンマ[,]で分割して攻撃力が高い順に並び替えてprint_rで出力してください。

$input = fgets(STDIN);
$array = explode(",",$input);
rsort($array);
print_r($array);
 ?>