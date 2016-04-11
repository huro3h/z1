<?php
// fgets関数を用いた標準入力方法
$a = fgets(STDIN);
echo $a;

//複数行入力とtrim関数(スペースや改行等を取り除いて出力)
$a1 = trim(fgets(STDIN));
$a2 = trim(fgets(STDIN));
$a3 = trim(fgets(STDIN));

echo $a1.'<br>';
echo $a2.'<br>';
echo $a3.'<br>';

//掛け算
$a4 = fgets(STDIN);
$a5 = fgets(STDIN);
$a6 = fgets(STDIN);

echo $a3*$a4*$a5;
?>
