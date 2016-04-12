<?php
// 1から10までカウントアップ
for($i=1; $i<=10; $i++){
    echo $i."<br>";
}
// 10から1までカウントダウン
for($i=10; $i>1; $i-- ){
    echo $i."<br>";
}
// カウントアップをwhile文で書いた場合
$i = 1;
while($i <= 10){
    echo $i."<br>";
    $i++;
}

// 標準入力(3,9)が入り、3から9までカウントアップさせたい場合
$a = trim(fgets(STDIN));
$a2 = trim(fgets(STDIN));

for ($i=$a; $i<=$a2; $i++ ){
    echo $i."\n";
}

// 標準入力(4)回分、同じ言葉を表示させたい場合
$a = trim(fgets(STDIN));
for($i=1; $i<=$a; $i++){
    echo "スライムがあらわれた。\n";
}

//標準入力の1行目に、それ以降何行の入力があるかが整数で示されます。(4,a,b,c,d)
//1行目で示された行数分の標準入力を取得して、改行なしで出力してみましょう。
$a = trim(fgets(STDIN));
for($i=1; $i<=$a; $i++){
    echo trim(fgets(STDIN));
}
?>