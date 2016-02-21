<?php 

if (isset($_COOKIE['my_id'])) {
	$myId = $_COOKIE['my_id'];
} else {
	$myId = '';
}

 ?>

<form action="input17.php" method="post">
	<dl>
		<dt>ID</dt>
		<dd><input type="text" name="my_id" id="my_id" value="<?php echo $myId; ?>" /></dd>

		<dt>パスワード</dt>
		<dd><input type="password" name="password" id="password" /></dd>
		<dt>IDの保存</dt>
	</dl>

	<p><input type="checkbox" name="save" id="save" value="on"/><label for="save">ID保存するよ！
	</label></p>
	<input type="submit" value="送信する" />
</form>