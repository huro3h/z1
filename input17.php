<?php 

$myId = $_POST['my_id'];
$password = $_POST['password'];
$save = $_POST['save'];
//echo var_dump($_POST);

//Cookieに保存
if ($save == 'on') {
	setcookie('my_id', $myId, time() +60*60*24*14);
	$message = 'ログイン情報を14日間記録します';
} else {
	setcookie('my_id', '');
	$message = '記録しませんでした☆';
}

 ?>

<p><?php echo $message; ?></p>
<p><a href="./input16.php">戻る</a></p>