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

// 演習課題「foreachループの練習３」

// 右側のエディターエリアのプログラムを元に、
// 配列のvalueに「勇者」が何回出現するか数えて
// 出現数を数字で出力
$input = trim(fgets(STDIN));
$array = explode(",", $input);
$num = 0;
foreach($array as $value){
    if($value == "勇者"){
        $num++;
    }
}
echo $num;

// 連想配列時のforeachで値を取り出すやり方
$array = array(
    "勇者" => 50,
    "魔法使い" =>23,
    "遊び人" => 34
);
// print_r($array);
foreach($array as $key => $value){
	echo $key."<strong>".$value."</strong><br>\n";
}

// 演習課題「foreachループでkeyを使う１」

// 右側のエディターエリアのプログラムを元に、
// $itemの中身を「弓矢は1200円です。\n」というように出力する
// foreachループを書いてみましょう。
// $itemにはkeyに商品名、valueに価格（整数のみ）が代入されています。
$item = array(
	"ショートソード" => 2000,
	"ロングソード" => 5000,
	"鉄の盾" => 1600,
	"鎖かたびら" => 2800
);
foreach($item as $key => $price){
    echo $key."は".$price."円です。\n";

// 演習課題「foreachループでkeyを使う２」

// 右側のエディターエリアのプログラムを元に、
// 2000円以下の商品を価格が高い方から順に並べ替えて
// print_rで出力するプログラムを書いてみましょう。
// $itemにはkeyに商品名、valueに価格（整数のみ）が代入されています。
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	if($value < 2001){
	// 連想配列として$itemに代入
	$item[$key] = $value;
	}
}
arsort($item);
print_r($item);
}

// 演習課題「foreachループでkeyを使う３」

// 標準入力で、キャラクター名,得点 の形式で複数行のデータが与えられます。
// 右側のエディターエリアのプログラムを元に、
// 得点が高い順番に並び替え、print_rで出力後、
// 勇者が何位なのか数字で出力してみましょう。

// Hint
// ■$resultをvalueが大きい順に並べ替える
// 連想配列$resultを得点（value）が大きい順に並べ替える。
// print_rで出力

// ■勇者の順位を調べる
// foreachでループ毎に順位確認用のカウンタ（$iなど）を1づつ加算するようにし、
// if文でkeyに勇者が登場するか分岐を行ない、勇者が出たらその際の順位を出力。
// ※順位は1位から順に加算していくので、ループ前にカウンタ変数に1をセットする必要があります。

while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
$num = 0;
arsort($result);
print_r($result);
foreach($result as $key => $value){
    $num++;
    if($key == "勇者"){
        break;
    }
}
echo $num;
?>