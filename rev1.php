<?php 

for ($i = 100; $i > 0; $i --) {
	echo $i.'<br />';
}

 ?>

 <?php 

for ($i = 1; $i < 11; $i++) {
	echo $i * 3;
	echo '<br>';
}

for ($i = 1; $i < 101; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo 'BuzzFizz'.'<br />';
	} elseif ($i % 5 == 0) {
	   	echo 'Buzz'.'<br />';
	} elseif ($i % 3 == 0) {
	    echo 'Fizz'.'<br />';
	} else {
	    echo $i.'<br />';
	}
}
	 
  ?>

