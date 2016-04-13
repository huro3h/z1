<?php
// データがある限りループして取得し続けるコード

$input = trim(fgets(STDIN));
// 値が空でなければループして値を取得し続ける
while($input){
    $array[] = $input;
    $input = trim(fgets(STDIN));
}
print_r($array);


// 演習課題「標準入力のすべての行を取得する２」

// 標準入力で行数不明の複数行のデータが入力されます。
// 右側のエディターエリアのプログラムをもとに、標準入力の全ての行の値に
// 末尾に「さん」を付けて、1行づつ改行して出力するように書き換えてください。
// ※配列に追加する必要はありません
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
// var_dump($array)
$a = $array;
$num = count($array);
for($i=0; $i<$num; $i++){
    echo $a[$i]."さん\n";
}

// 演習課題「勇者を捜せ！」

// 標準入力で行数不明の複数行のデータが入力されます。
// 右側のエディターエリアのプログラムをもとに、標準入力から
// 入力される値が「勇者」となっているものだけを判別して、
// 全部で勇者が何回登場したかを整数で出力してください。

// ヒント
// $inputの中身が勇者かどうか判定し、勇者だけを配列に代入、
// ループ終了後に配列の要素数を集計すると簡単に出来ます。

// 標準入力から1行データを取得
$input = trim(fgets(STDIN));
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    if($input == "勇者"){
        $array[] = $input;
    }
    // 標準入力から1行データを取得
    $input = trim(fgets(STDIN));
}
    echo count($array);

// 読み込みデータの途中で改行が入り、while文が終了してしまうのを防ぐ方法
// 最初の読み込みの際にはtrimせず、$input代入時にtrimしてやる
// データ取得
$input = trim(fgets(STDIN));
//値が空でなければループして値を取得し続ける
while($input){
    $array[] = $input;
    $input = trim(fgets(STDIN));
}
print_r($array);

// コード修正
// 1.改行を入れたまま$inputに代入
// 2.$inputから$array[]に代入する時にtrimしてやる
// 3.$arrayに空ではなく改行が入り、ループが止まるのを防ぐ

$input = fgets(STDIN);
//値が空でなければループして値を取得し続ける
while($input){
    $array[] = trim($input);
    $input = fgets(STDIN);
}
print_r($array);

//上の省略Ver.
//値が空でなければループして値を取得し続ける
while($input = fgets(STDIN)){
    $array[] = trim($input);
}
print_r($array);

?>