<?php
  
  if(isset($_POST['btnOk'])){

  $nrp = $_POST['nrp'];

  $nama= $_POST['nama'];

  $satuan= $_POST['satuan'];

  foreach($nrp as $key => $val){

  echo 'NRP = '.$nrp[$key].' Nama = '.$nama[$key].' satuan = '.$satuan[$key].'<br/>';

  }

  }

  ?>
<form method="get" name="frm" action="">

  <input name="jumlah" type="text" />

  <input type="submit" name="btnJumlah" value="Ok" />

  </form>

<form method="post" name="frmpost" action="">

  <table width="547" border="0" cellpadding="0" cellspacing="0">

  <tr>

  <td width="32" height="22" valign="top">No</td>

  <td width="114" valign="top">NRP</td>

  <td width="240" valign="top">Nama</td>

  <td width="161" valign="top">Satuan</td>

  </tr>

  <?php

  if(isset($_GET['jumlah']) && $_GET['jumlah']>0){

  $jumlah_form = $_GET['jumlah'];

  }

  else{

  $jumlah_form = 1;

  }

  for($i=1; $i<=$jumlah_form; $i++){

  ?>

  <tr>

  <td height="23"><?php echo $i; ?></td>

  <td><input name="nrp[]" type="text" size="10" /></td>

  <td><input name="nama[]" type="text" size="30" /></td>

  <td><input type="text" name="satuan[]" /></td>

  </tr>

  <?php

  }

  ?>

  <tr>

  <td height="23" colspan="4" align="right"><input type="submit" name="btnOk" value="Simpan" /></td>

  </tr>

  </table>

  </form>


