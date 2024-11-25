<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$var_global = 5;
$nama = "Riana";

// print_r($GLOBALS);
// die(); // untuk tidak memporses program yang ada di bawahnya

function cetak () {
    global $var_global; //deklarasi var_global yang terdapat di luar function cetak
    $var_lokal = 6;
    echo "Nilai variabel Lokal : ";
    echo $var_lokal;
    echo "<br/>";
    echo "Nilai variabel global : ";
    echo $GLOBALS['var_global']; //pemanggilan var_global ke dalam function versi pertama
    echo $var_global; //pemanggilan var_global ke dalam function versi kedua
}

cetak();
echo "<br/>";
echo "Nilai variabel global : ";
echo $var_global;

