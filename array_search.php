<?php
// 配列の要素に特定の値が存在すれば、要素のキーを返す array_search()

// array_search()は、in_array()と同じように
// 第2引数の配列の要素に第1引数の値が存在するかを調べます。
// in_array()が結果をBool値で返すのに対して、
// array_search()は最初に見つかった要素のキーを返します。
// 値が見つからなかった場合は、falseが返されます。
// 第3引数に関してはin_arrayと同様です。



$array = array('a', 'foo' => 'b', 'c', 'b');
$result = array_search('b', $array, true);
var_dump($result); // 出力：string(3) "foo"
?>