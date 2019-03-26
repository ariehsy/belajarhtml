<!DOCTYPE html>
<html>
<head>
	<title>Contoh if foreach</title>
</head>
<body>

<?php
$bulan = array('januari','februari','maret','april');
foreach ($bulan as $index => $value) {
	if($value == 'februari'){
		echo "Cetak Bulan ".$index." ".$value;
		echo "<br>";
		} else {
			echo "Bukan Bulan Februari tetapi bulan ".$index." ".$value;
			echo "<br>";
		}
	}


?>

</body>
</html>