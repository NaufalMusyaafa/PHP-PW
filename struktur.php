<?php

$perulangan1 = [];
$perulangan2 = [];

for ($i=0; $i < 10 ; $i++) { 
    $perulangan1[] = $i * 0.5 * 6;
    $perulangan2[] = $perulangan1;
}

// lihat hasil $perulangan1 dan $perulangan2 
echo $perulangan1[4];
echo "<br/>";
echo $perulangan2[4][3];
echo "<br/>";
echo "<pre>";
print_r($perulangan1); // menampilkan semua nilai dari $perulangan1
var_dump($perulangan1); // lebih lengkap dari print_r
print_r($perulangan2);