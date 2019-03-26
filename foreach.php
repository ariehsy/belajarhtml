<!DOCTYPE>
<html>
<head>
<title>	</title>
</head>
<body>
<form action="foreach" method="post">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker" name="datepicker"></p>


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

<select name="tgl">
<?php for ($tgl=1; $tgl <=31; $tgl++) { ?>
<option value="<?php echo $tgl; ?>"><?php if (!empty($_POST['tgl'])){echo $_POST['tgl'];} else echo $tgl;?></option>
<?php }?>
</select>


<select name="month"> 
<?php foreach ($variable_bulan as $month){?>
<option value="<?php echo $month; ?>"><?php if (!empty($_POST['month'])){echo $_POST['month'];} else echo $month;?> </option> 
<?php } ?> 
</select>

<select name="thn">
<?php for ($thn=1980; $thn <=2050 ; $thn++) { ?>
<option value="<?php echo $thn; ?>"><?php if (!empty($_POST['thn'])){echo $_POST['thn'];} else echo $thn;?> </option> 
<?php }?>
</select>




<input type="submit" name="submit" value="submit">

</form>

<?php 

if(!empty($_POST['submit'])){
$month = $_POST['month'];
$thn = $_POST['thn'];
$tgl = $_POST['tgl'];
$datepicker = $_POST['datepicker'];


echo $tgl;
echo "<br>";
echo $month;
echo "<br>";
echo $thn;
echo "<br>";
echo $datepicker;


}
?>


</body>
</html>