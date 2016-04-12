<!-- while文で50歳までのプルダウンメニュー -->

<select name="age">
<?php
$i = 1;
while($i <= 50){
    echo "<option>".$i."歳</option>";
    $i++;
}
?>
</select>

<!-- while文で2つの標準出力値の間のプルダウンメニューを作る -->
<!-- 標準出力値 2010,2015 -->
<select name="year">
<?php
$year1 = trim(fgets(STDIN));
$year2 = trim(fgets(STDIN));
$i = $year1;
while($i <= $year2){
    echo "<option>".$i."年生まれ</option>\n";
    $i++;
}
?>
</select>

<?php
// 「西暦年と昭和年の対応表を作ろう」
// 対応表は昭和1年（西暦1926年）から昭和64年（西暦1989年）の
// 対応表を出力してください。
// 出力は1行ずつ「西暦19○○年は、昭和○○年です」と出力してください。

for($s=1926; $s<=1989; $s++){
    $sh = $s - 1925;
    echo "西暦".$s."年は、昭和".$sh."年です。\n";
}
?>
<!-- 右側のエディターエリアのプログラムをもとに、標準入力1行目で
与えられる西暦年から、標準入力2行目で与えられる年数分の
西暦年と昭和年の対応表を出力するプログラムを完成させてください。

出力は1行ずつ「西暦19○○年は、昭和○○年です」と出力してください。 -->
<!-- 入力される値(1975,10) -->

<?php
$year = trim(fgets(STDIN));
$ten = trim(fgets(STDIN));

var_dump($year);
var_dump($ten);

for($i=$year; $i<=1984; $i++){
$s = $i - 1925;
echo "西暦".$year."年は、昭和".$s."年です。\n";

}

// ↓解答例
$start_year = trim(fgets(STDIN)); // 標準入力1行目取得 開始年
$term = trim(fgets(STDIN)); // 標準入力2行目取得 表示年数
$end_year = $start_year + $term; // ループ終了年の計算
for($i=$start_year ; $i<$end_year; $i++){
    $showa = $i-1925;
    echo "西暦".$i."年は、昭和".$showa."年です。\n";
}
?>