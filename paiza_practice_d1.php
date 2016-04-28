<?php
// 2つの正の整数がa, bが半角スペース区切りで入力されるのでaとbを足した数を出力。
// https://paiza.jp/learning/addition

$input = fgets(STDIN);
$in = explode(" ",$input);
echo array_sum($in);

// 改行区切りで正の整数nがi個入力されるので小さい順に改行区切りで出力。
// https://paiza.jp/learning/sort-number

while($input = fgets(STDIN)){
    $input = trim($input);
    $array[] = $input;
}
unset($array[0]);
sort($array);
foreach($array as $num){
    echo $num."\n";

}

// あなたは1対1で戦う競技の大会を開くことにしました。
// N 人の選手で総当り対戦を行う場合、何回の対戦が行われるか出力して下さい。
// N 人の総当り戦では N 人がそれぞれ自分自身以外と対戦します。
// また、自分自身から見た結果と、相手側から見た結果があるで N × (N - 1) / 2で求められます。
// N 人の選手で総当り対戦を行う場合、何回の対戦が行われるか出力して下さい。
$in = fgets(STDIN);
echo $in*($in-1)/2;

// D010:Eメールアドレス
// Eメールアドレスはローカル部とドメインを「@」を繋いだ文字列で表されます。
// ローカル部を s ,ドメインを t として、それぞれ長さ n の文字列が改行区切りで入力されます。

// 以下の構文に沿った文字列を出力してください。
// s(ローカル部)@t(ドメイン)
// 例えば
// info
// paiza.jp
// のような入力の場合

// info@paiza.jp
// と出力して下さい。
$in1 = trim(fgets(STDIN));
$in2 = trim(fgets(STDIN));
echo $in1.'@'.$in2;

// D035:日付のデータ
// スペース区切りで西暦 y 、月 m 、日 d が入力されます。
// "/" 区切りで文字列として出力して下さい。
// 例えば
// 2016 2 12
// と入力された場合
// 2016/2/12
// と出力して下さい。
$in = fgets(STDIN);
$inp = explode(" ",$in);
// var_dump($inp);
echo "$inp[0]/$inp[1]/$inp[2]";

// D002:数の比較
// ある正の整数aとbがスペース区切りで入力されます。
// aとbを比較し大きい方の値を出力して下さい。aとbが同じ場合は「eq」と出力して下さい。

// 70点(´・ω・`)
$in = fgets(STDIN);
$inp = explode(" ",$in);
// var_dump ($inp);
// echo $inp[0];
// echo $inp[1];

if($inp[0] == $inp[1]){
    echo "eq";
}elseif($inp[0] < $inp[1]){
    echo $inp[1];
}else{
    echo $inp[0];
}

// D023:Aの個数
// 半角アルファベットで構成された文字列 s が与えられます。
// s に含まれる半角アルファベット 「A」 の数を出力して下さい。
$in = fgets(STDIN);
echo substr_count($in, 'A');

// D039:正三角形かどうか
// あなたは、3つの辺の長さが分かっている三角形が正三角形なのかを判別しようとしています。
// 正三角形を判別する場合、3つの辺すべての長さが等しければ正三角形と判別できます。
// 3つの辺の長さ a, b, c が改行区切りで与えられるので正三角形なら "YES", 正三角形でなければ "NO" と出力してください。

$in1 = fgets(STDIN);
$in2 = fgets(STDIN);
$in3 = fgets(STDIN);

if($in1 == $in2 && $in2 == $in3){
    echo "YES";
}else{
    echo "NO";
}

// D039:swift
let inp1 = readLine()!
let inp2 = readLine()!
let inp3 = readLine()!

if (inp1 == inp2) && (inp2 == inp3) {
    print("YES")
}else{
    print("NO")
}

// D034:どれにしようかな
// あなたはレストランで何を注文しようか迷っています。しかしあまり時間がないので
// 「どれにしようかな天の神様の言うとおり」で决めてしまいましょう。

// 選ばれるメニューはこの文字数 21 を迷っているメニューの数で割れば求められます。
// ただし余りが 0 となるときはそのメニューの中で最後のものが選ばれることに注意しましょう。
// 例)
// 4 つの中で迷っている場合
// 21 ÷ 4 = 5 余り 1 なので 1 番目のメニューが選ばれます。
// 3 つの中で迷っている場合
// 21 ÷ 3 = 7 余り 0 ですが、これは一番最後にくるものを指すので、 3 番目のメニューが選ばれます。

$in = fgets(STDIN);
$result = 21%$in;
if($result == 0){
    echo $in;
}else{
    echo $result;
}

// D033:頭文字
// あなたは半角アルファベットの苗字と名前からそれぞれ 1文字目を取りイニシャルを作ることにしました。
// 半角スペース区切りで苗字と名前が入力されるので、1文字目を取り "." (半角ドット)で区切った文字列を出力してください。

// 例えば以下の様な入力の場合
// Paiza Tarou
// 以下の様に出力してください
// P.T

$input_lines = fgets(STDIN);
$in = explode(" ",$input_lines);
// var_dump($in[0]);
$one = substr($in[0],0,1);
$two = substr($in[1],0,1);
echo $one.".".$two;


// D003:掛け算のリスト
// ある正の整数nが入力されます。
// 正の整数1から9に整数nをそれぞれを掛けた数を半角スペース区切りで出力して下さい。
// 例えばn=2の場合
// 2 4 6 8 10 12 14 16 18
// となります

$in = fgets(STDIN);
for($i= 1; $i<9; $i++){
    echo $i*$in;
    echo " ";
}
for($i= 9; $i<10; $i++){
echo $i*$in;
}

// D028:数字の桁数
// ある10進数の正の整数 n が与えられます。
// n が何桁かを数字で出力してください。
$in = trim(fgets(STDIN));
echo strlen($in);

// D004:文字列の結合
// 半角アルファベットのみで構成された長さmの文字列s_iがn行入力されます。
// 以下のような形式で

// Hello [s_1],[s_2],...[s_n].
// 「Hello」に文字列s_iを入力された順に「,」で結合したものを半角スペースで結合し、
// 末尾に「.」を結合した文字列を出力するプログラムを作成してください。
    $in = trim(fgets(STDIN));
    for($i=0; $i<$in; $i++){
        $mem[] = trim(fgets(STDIN));
    }
    // var_dump($mem);
    $say = implode(",",$mem);
    echo "Hello ".$say.".";

// D024:三角形の内角の和
// 平面上の三角形の内角の和は全て足すと 180 度になります。

// 平面上の三角形の 2 つの角の角度 a, b が改行区切りで
// 与えられるので残りの 1 つの角の角度を出力して下さい。

// 例えば以下のような入力の場合
// 60
// 90
// 以下のように出力して下さい

$in1 = fgets(STDIN);
$in2 = fgets(STDIN);
echo 180-($in1+$in2);
 ?>