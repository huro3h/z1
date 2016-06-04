<?php
// C016:Leet文字列

// Leet と呼ばれるインターネットスラングがあります。
// Leet ではいくつかのアルファベットをよく似た形の他の文字に置き換えて表記します。
// Leet の置き換え規則はたくさんありますが、ここでは次の置き換え規則のみを考えましょう。
// 置き換え前 置き換え後
// A	4
// E	3
// G	6
// I	1
// O	0
// S	5
// Z	2
// 文字列が入力されるので、これを Leet に変換して出力するプログラムを書いてください。

$in = trim(fgets(STDIN));
$replaceText = str_replace("A", "4", $in);
$replaceText = str_replace("E", "3", $replaceText);
$replaceText = str_replace("G", "6", $replaceText);
$replaceText = str_replace("I", "1", $replaceText);
$replaceText = str_replace("O", "0", $replaceText);
$replaceText = str_replace("S", "5", $replaceText);
$replaceText = str_replace("Z", "2", $replaceText);
echo $replaceText;
 ?>