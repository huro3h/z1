<?php 

foreach($_POST['reserve'] as $reserve) {
	echo (htmlspecialchars($reserve, ENT_QUOTES, 'UTF-8'). '<br />');
	
}
	echo '上記の日程でご予約を承りました。複数ご選択頂いた場合は後ほどご連絡差し上げます。';
 ?>