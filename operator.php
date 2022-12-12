<?php
$x = 5;
$y = 10;
echo "Variable X = {$x}";
echo    "<br>";
echo "Variable Y = {$y}";
echo    "<br>";
// Penjumlahan
$plus = $x + $y;
echo "Hasil penjumalahan Variable X + Y =  {$plus}";
echo    "<br>";
// Pengurangan
$minus = $y - $x;
echo "Hasil pengurangan Variable Y - X =  {$minus}";
echo    "<br>";
// Pengurangan dengan hasil yang berbeda
$minus2 = $x - $y;
echo "Hasil pengurangan Variable X - Y =  {$minus2}";
echo    "<br>";
// Pembagian
$bagi = $x / $y;
echo "Hasil pembagian Variable X + Y =  {$bagi}";
echo    "<br>";
// Perkalian
$kali = $x * $y;
echo "Hasil perkalian Variable X + Y =  {$kali}";
echo    "<br>";
// Perkondisian dengan if
$hari = "senin";
// Method 1 
// pada kolom if jika terdapat variable yang di panggil namun berbeda dengan yang di tentukan maka akan menghasilkan variable baru selain dari ini maka akan berbeda dengan artinya 
// Apakah hari ini sama dengan senin
// if ($hari = "senin") {
// Method 3
//  Penulisan === untuk mengecek tipe data true / false (boolean)
// if ($hari === "senin") {
// Method 2
// Jika hari ini sama dengan senin
if ($hari == "senin") {
    echo "Saya akan kuliah pada {$hari}";
} else {
    echo "Saya akan libur selain {$hari}";
}
echo    "<br>";
// Pengkondisian IF Kedua
$a = 3;
$b = 3;
if ($a + $b == '7') {
    $z =  "Benar";
} else {
    $z = "Salah";
}
echo $z;
