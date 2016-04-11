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
