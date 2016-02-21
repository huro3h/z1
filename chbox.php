<?php 

foreach($_POST['reserve'] as $reserve) {
	echo (htmlspecialchars($reserve, ENT_QUOTES, 'UTF-8'). '<br />');
	
}
	echo '上記の日程でご予約を承りました。複数ご選択頂いた場合は後ほどご連絡差し上げます。';
	echo '<br />';
	echo '<br />';
$age = mb_convert_kana($_POST['age'], 'n', 'UTF-8');

if (is_numeric($age)) {
	echo ($age . '歳');
} else {
	echo ('年齢は数字でご記入ください☆');
}

	echo '<br />';
	echo '<br />';

$zip = mb_convert_kana($_POST['zip'], 'a', 'UTF-8');
 // echo var_dump($zip);
if (preg_match("/¥A¥d{7}¥z/", $zip)) {
	print ('郵便番号:〒'. $zip);
} else {
	print ('郵便番号は 1234567 の形式でご記入ください(ハイフン不要)');
}

 ?>

