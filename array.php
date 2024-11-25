<?php

$array_num_1 = array(5,34,22,23,42);
$array_num_2 = [12, 43, 634, 34, 1];

$array_assoc_1 = array(
    "Sabun" => 6,
    "iwak" => 20,
    "shampo" => 10,
    "sapu" => 2
);

$array_assoc_2 = ["Nama" => "Ohio Final Boss", "NIM" => 9868976];

// mengetahui jumlah array
echo count($array_num_1);
echo count($array_num_2);
echo count($array_assoc_1);
echo count($array_assoc_2);

//mengurutkan array
echo "<pre/>";
echo "array original ";
print_r($array_num_1);
echo "<br/>";
$array_asort = $array_num_1;
echo "Pengurutan menggunakan asort: ";
asort($array_asort); // asort mengurutkan array dan mengubah urutannya
print_r($array_asort);
sort($array_num_1); // sort mengurutkan array tanpa mengubah urutannya
echo "<br/>";
echo "Pengurutan menggunakan sort: ";
print_r($array_num_1);
echo "<br/>";

// memasukkan nilai baru ke array
echo "<pre/>";
print_r($array_num_1);
array_push($array_num_1, 81, 12, 21, 69);
echo "<pre/>";
print_r($array_num_1);

// membuang nilai terakhir dan mengambilnya
echo "<pre/>";
$array_pop = array_pop($array_num_1);
echo "Nilai array setelah dibuang menggunakan pop: ";
print_r($array_num_1);
echo "<pre/>";
echo "nilai yang diambil:";
print_r($array_pop);

// mengubah string menjadi array dengan tanda spasi ( )
$str = "There's no such thing as free luch";
$new_array = explode(" ", $str);
print_r($new_array);

echo $array_assoc_2["Nama"];
echo "<br/>";
echo "Nama saya adalah $array_assoc_2[Nama]";
