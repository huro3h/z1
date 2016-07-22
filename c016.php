<?php
	$in = trim(fgets(STDIN));
	// 置換対象文字列

	// "A" という文字列を "×" に置換する
	$replaceText = str_replace("A", "4", $in);
	$replaceText = str_replace("E", "3", $replaceText);
	$replaceText = str_replace("G", "6", $replaceText);
	$replaceText = str_replace("I", "1", $replaceText);
	$replaceText = str_replace("O", "0", $replaceText);
	$replaceText = str_replace("S", "5", $replaceText);
	$replaceText = str_replace("Z", "2", $replaceText);
	echo $replaceText;
 ?>