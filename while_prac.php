<?php
// 1から20までの数字を改行しながらカウント
// 動画説明では改行 <br> → "\n"
$a = 1;

while($a < 21){
    echo $a++."<br>";
}

// 10から20まで改行しながらカウント
$b = 10;

while($b < 21){
    echo $b++."<br>";
}

// 標準入力で2と8が与えられた時
// 2から8まで出力
$a = trim(fgets(STDIN));
$a2 = trim(fgets(STDIN));
$i = $a;
while($i <= $a2){
    echo $i."\n";
    $i++;
}

// 標準出力数分文字を書きたい時
// $i = 1の設定を忘れないこと！
$sleep = trim(fgets(STDIN));
$i = 1;
while($i <= $sleep){
    echo "眠い。\n";
    $i++;
}


 ?>