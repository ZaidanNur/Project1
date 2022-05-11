<?php
echo "Hello world";
// ini comment
echo "halo beb";
$nama = "Zaidan";
echo $nama;
/*
ini juga komen
*/

// TIPE DATA
$a = "ini string";
$b = [
    "Satu","Dua","Tiga"
];
foreach ($b as $key => $b) {
    echo $b . '</br>';
}
// echo $b[0];
 $num = 10;

//  if($num >=0){
//      echo $num;
//      $num--;
//  }

 for ($i=$num; $i >=0 ; $i--) { 
     echo $i;

 }

 $case = 0;
 switch ($case) {
     case 1:
         echo "case 1";
         break;
    case 2;
        echo "Case 2";
        break;
     
     default:
         echo "Case 0";
         break;
 }
$aku = "Zaidan";
function akuadalah($nama = "Kamu")
{
    echo "</br>"."Hai ". $nama;
}
akuadalah($aku);
?>