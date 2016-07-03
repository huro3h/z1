<?php
	$in = explode(" ",trim(fgets(STDIN))); // くじの当選番号
	$num = trim(fgets(STDIN)); // 購入枚数

	for($i=0; $i<$num; $i++){
	    $mynumber = explode(" ",trim(fgets(STDIN))); // 手持ちのくじ番号を配列に代入
	    echo count(array_intersect($in, $mynumber)); // 当たりの数を比較
	    echo "\n";
	}

	// array_intersect()

	//ある配列の要素のうち、他の複数のいづれの配列にも存在する値の要素はどれかを調べ、
	//キーと値の相関関係を維持したまま抽出する組み込み関数。
	//配列要素を比較する際、キーは比較せず、値だけを比較する。
 ?>