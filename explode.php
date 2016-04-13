<?php
// $配列名 = explode("分割する区切り文字", 分割したい文字列);
// カンマで区切られたCSVデータのような、特定の区切り文字で区切られた文字列を分割して
// 配列に代入する関数です。
// 例；
// $string"= "a/b/c";
// $array = explode("/", $string);
// /で区切られたもじa,b,cを分割して配列に代入します。
// $array[0]にはaが、$array[1]にはbが、$array[2]にはcが代入されます。


// 演習課題「explodeで文字列を分割してみよう」

// 標準入力でスラッシュ（/）で区切られたURLが与えられます。
// explode関数を使い、スラッシュ（/）で分割し、配列に代入して
// print_rで配列の中身を出力してみましょう。

// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// $inputの文字列を分割してみよう！
$array = explode("/","$input");
print_r($array);
// var_dump ($array);

// 演習課題「配列の中身を数えてみよう」

// 標準入力でカンマ区切り（ , ）のデータが1行与えられます。
// その中にいくつの要素が入っているかを数えて、その数を出力してください。
// 例　戦士,侍,忍者　という入力があったら「3」と出力する
$input = trim(fgets(STDIN));
// カンマ区切りでいくつの要素が入っているか数えよう
$array = explode(',',$input);

// var_dump($array);
$a = count($array);
echo $a;


// 演習課題「配列の中身を1行づつ表示してみよう」

// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割し$arrayに配列として代入
$array = explode(",", $input);
// $arrayの要素数を数えて$numに代入
$num = count($array);
// $numの数だけループして$arrayから
// 要素を一つづつ取り出してみよう
// var_dump($input);
// var_dump($array);
$a = $array;
// var_dump($a);

for($i=0; $i<$num; $i++){
    echo $a[$i];
    echo "\n";
}

// 演習課題「配列の中身を1行づつ表示してみよう２」

// 標準入力で1行で与えられるカンマ区切り（ , ）のデータを、
// カンマで分割して、各要素を1行ずつ改行して
// 末尾に「さん」と付けて出力してみましょう。
$input = trim(fgets(STDIN));
$array = explode(',',$input);
$num = count($array);
// var_dump($num);
// var_dump($array);
$a = $array;
for($i=0; $i<$num; $i++){
    echo $a[$i]."さん\n";
}
 ?>