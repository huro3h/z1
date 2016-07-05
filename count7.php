<?php
// 1からnまで連続する正の整数があります。
// それらの中に、「7」がいくつあるかを数えてください。

// 99までで「7」を含む値は、
// 7 17 27 37 47 57 67 70 71 72 73 74 75 76 77 78 79 87 97
// の19個ですが、77には「7」が2つ含まれています。
// ですので、「7」の数は19個ではなく、20個と答えてください。なお、nは32bit整数に収まるものとします。
	$a = 0;
	while($number = fgets(STDIN)){
	    for($z=0; $z<=$number; $z++){
	        $allnumber[] = $z;
	    }

	    $tes = implode("",$allnumber);
	    $tes2 = str_split($tes);
	    // var_dump($tes2);
	    $count = count($tes2);

	        for($i=0; $i<$count; $i++){
	            if($tes2[$i] == "7"){
	                $a++;
	            }
	        }
	    echo $a;
	    echo "\n";
	    unset($tes2);
}
 ?>