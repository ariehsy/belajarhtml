<?php
// buat class laptop
class laptop {
  
   // buat property untuk class laptop
   var $pemilik;
   //var $merk;
   //var $ukuran_layar;
  
   // buat method untuk class laptop
   function hidupkan_laptop() {
     return "Hidupkan Laptop";
    }
   function matikan_laptop() {
     return "Matikan Laptop dong";
   }
   function kalkulasi(){
      $x = 2;
      $y = 4;

      echo $x+$y;
   }
   function luas_segitiga($a,$t){
      $luas = 1/2 * $a * $t;
      echo $luas;
   }
   function bmi($berat,$tinggi) {
              $bmi = $berat/($tinggi*$tinggi);
              return $bmi;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
$laptop_andi = new laptop();
$laptop_dina = new laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_andi->pemilik="Andi";
$laptop_dina->pemilik="dina";
  
// tampilkan property
echo $laptop_anto->pemilik;
echo "<br />";
echo $laptop_andi->pemilik;
echo "<br />";
echo $laptop_dina->pemilik;
echo "<br />";
  
// tampilkan method
echo $laptop_anto->hidupkan_laptop();
echo "<br />";
echo $laptop_anto->matikan_laptop();
echo "<br />";
echo $laptop_anto->kalkulasi();
echo "<br />";
echo $laptop_anto->luas_segitiga(4,5);
echo "<br />";
echo $laptop_anto->bmi(78,1.78);
?>