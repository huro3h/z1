<?php
// ここまで学んできた連想配列やforeachを利用して、
// ロールプレイングゲームのアイテムリストを、画像をつかって再現してみたいと思います。

$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
$item_order = array("クリスタル", "盾", "剣", "回復薬");

// 慣れるまでは手順をコメントで書く
// 並び順配列をループさせてアイテム名を表示
foreach($item_order as $item_name){
    // アイテム名を元に画像用配列から画像ファイル名を取得
    echo "<img src=".$item_img[$item_name].">";
    echo $item_name."<br>";
}

// 演習課題「画像を順番に出力する」

// 右側のエディターエリアのプログラムを元に、
// $itemのvalueとして代入されている画像urlを元に、
// 1行づつHTMLで画像を表示してみましょう。

// HTMLで画像を1行つう表示する場合は以下のようにimgタグを利用します。
// 今回は１つづつ改行させたいのでbrタグとその後に\nの改行コードを入れてください。
// <img src=URL><br>\n

foreach($item_img as $item){
    echo "<img src=".$item.">";
    echo "<br>\n";
}

// $item_img変数につられて "img「 _ 」src="と入力しないように注意
 ?>