<?php
// asort関数 連想配列をvalueでsortする時に使う関数
// 連想配列にsort関数を使うとただの配列になってしまう。
asort($item);
print_r($item);

// arsort関数 連想配列をvalueで逆sortする時に使う関数
arsort($item);
print_r($item);

// ksort関数 連想配列をkeyでソートする
// krsort関数 連想配列をkeyで逆ソートする


// 演習課題「データを取得して並べ替えて出力してみよう」

// 標準入力で複数行のデータが与えられます。
// 各行のデータはカンマ区切りで [アイテム名、攻撃力] の形式となっているので、
// アイテム名をkeyに、攻撃力をvalueとして連想配列に代入してください。
// ※$item["ロングソード"] = "攻撃力:11" と言う状態。

// その後、攻撃の大きい順に並び替えてprint_rで出力するプログラムを作成してください。

while($input = fgets(STDIN)){
    $key_value = explode(",",trim($input));
    $key = $key_value[0];
    $value = $key_value[1];
    // $key_value[] = trim($input);
    $item[$key] = $value;
};
// var_dump($key_value);
// var_dump($key);
// var_dump($value);
arsort($item);
print_r($item);
?>


 ?>