<table>
<?php 


for ($i=1; $i<11; $i++) {
	if ($i % 2){
		echo('<tr style="background-color: #bceof2">');
	} else {
		echo ('<tr>');
	}
	echo ('<td>' . $i .'</td>');
	echo ('<td>' . $i .'行目の情報ですよ！</td>');
	echo ('<tr>');
}

 ?>
</table>