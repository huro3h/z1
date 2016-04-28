<?php

// C006:ハイスコアランキング

// あなたはとあるアイテム集めゲームのユーザーランキングを作ることになりました。

// アイテムの種類はN個あり、アイテムは種類ごとに得点が異なります。
// 各アイテム種別毎の1個あたりの得点はCiで表現され、ユーザーが持っている
// それぞれのアイテムの数はXiで表現されます。
// （アイテムiの１個当たりの得点はCi、ユーザーの持ち数はXiという事です）

// ユーザーのスコアは、各アイテム持ち数×各アイテムの得点の総和となります。

// 例）
// アイテム種別毎の得点
// C1 = 1.5, C2 = 1.2, C3 = 2, C4 = 0.4

// ユーザーのアイテム持ち数
// X1 = 49, X2 = 30, X3 = 2, X4 = 6486

// 上記の場合スコアS
// S = C1 * X1 + C2 * X2 + C3 * X3 + C4 * X4
// = 49 * 1.5 + 1.2 * 30 + 2 * 2 + 0.4 * 6486
// = 2707.9
// ≒ 2708
// として算出します。

// Sの値が小数になった場合は、小数第一位を四捨五入し、整数に
// します。以上のスコア計算を、M人のユーザーに行い、トップKのスコア(Ｋ＝３の場合トップ３)を
// 出力してください。

//1st try 70点でしたー(*´-`)
    $in = trim(fgets(STDIN));

    while($in){
        $array[] = $in;
        $in = trim(fgets(STDIN));
	}
    // var_dump($array[0]);
    $l1 = $array[0]; //$l1 = アイテム数,参加人数,入賞者数(4,10,3)
        $l1a = explode(" ",$l1);
        // var_dump($l1a);
    $l2 = $array[1]; //$l2 = 1.5 1.2 2 0.4 得点倍率
    // var_dump($l2);

    $l2a = explode(" ",$l2); //得点倍率を配列の形で$l2aに代入
    // print_r($l2a);

    $num = 2;
    for($i=0; $i<$l1a[1]; $i++){    // $l1a=参加人数(10)
        $players[] = $array[$num];
        $num ++;
    }
    // var_dump($players); // $players[]に全員のプレイヤースコア代入済

    for($j=0; $j<$l1a[1]; $j++){    // $l1a=参加人数(10)
        $each_player[] = explode(" ",$players[$j]);
    }
    // $each_player[]に個人所有アイテム数配列で代入済
    // print_r($each_player);

    $n = 0;
    for($k=0; $k<$l1a[1]; $k++){
	    $total_score[] = ($l2a[0]*$each_player[$n][0])+($l2a[1]*$each_player[$n][1])+($l2a[2]*$each_player[$n][2])+($l2a[3]*$each_player[$n][3]);
	    $n++;
    }
    rsort($total_score);
    // round($total_score);
    // var_dump($total_score); //最終個人成績を配列で値の高い順に代入

    for($l=0; $l<$l1a[2]; $l++){
        $hyousyou = $total_score;
        $end[] = round($hyousyou[$l]);
    }
    // var_dump($end);
    echo implode("\n",$end);
?>