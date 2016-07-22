<?php
	//①入力処理：値取得、テーブル座席の配列準備
	$nm_array = explode(" ",fgets(STDIN));
	$seat_num = $nm_array[0];
	$group_num = $nm_array[1];

	echo "シート数：".$seat_num."\n";
	echo "グループ数：".$group_num."\n";

	$seat = array();
	$seat = array_pad($seat, $seat_num, 0); // 0が空席
	// array_pad(変数, 埋めたい数, 何の値で埋めるか)
	var_dump($seat);

	// グループ毎に空席確認
	for($i=0; $i<$group_num; $i++){
	    $group_array = explode(" ",trim(fgets(STDIN)));
	    $group_person_num = $group_array[0];
	    $sit_point = $group_array[1];
	    var_dump($group_person_num);
	    var_dump($sit_point);
			//グループ分のループ
		 		//グループの人数分のループ、空席確認
		 		//円卓処理
		//③席が空いていたら座る処理
			//グループの人数部のループ、着席処理
			//円卓処理
	}
	//④出力処理：座った人の人数を出力
 ?>