<!DOCTYPE>
<html>
<head>
<title>	</title>
</head>
<body>


<select> 
<?php for ($tgl=1; $tgl <=31 ; $tgl++){?>
<option value="<?php echo $tgl; ?>"><?php echo $tgl; ?> </option> 
<?php } ?> 
</select>

<?php 
$variable_bulan = array ("January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December");
?>

<select> 
<?php foreach ($variable_bulan as $month){?>
<option value="<?php echo $month; ?>"><?php echo $month; ?> </option> 
<?php } ?> 
</select>

<select> 
<?php for ($thn=1980; $thn <=date("Y"); $thn++){?>
<option value="<?php echo $thn; ?>"><?php echo $thn; ?> </option> 
<?php } ?> 
</select>

</body>
</html>