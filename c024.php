<?php
	$in = trim(fgets(STDIN)); // 命令の数
	for($i=0; $i<$in; $i++){
	    $req = explode(" ",trim(fgets(STDIN)));
	    // var_dump($req);
	    if($req[0] == "SET" && $req[1] == "1"){
	        $num1 = $req[2];
	    }elseif($req[0] == "SET" && $req[1] == "2"){
	        $num2 = $req[2];
	    }elseif($req[0] == "ADD"){
	        $ansadd = $num1 + $req[1];
	        $num2 = $ansadd;
	    }elseif($req[0] == "SUB"){
	        $anssub = $num1 - $req[1];
	        $num2 = $anssub;
	    }
	}

	echo $num1." ";
	echo $num2;
 ?>