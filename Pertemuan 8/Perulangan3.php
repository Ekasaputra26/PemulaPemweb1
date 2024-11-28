<?php

$angka = readline("Silahkan masukan angka: ");
$totalDigit = 0;

// perulangan untuk menghitung input dari pengguna
for ($i = 0; $i < strlen($angka); $i++) {
    if (ctype_digit($angka[$i])) {
        $totalDigit += (int)$angka[$i];
    }
}

echo "Jumlah total digit = " . $totalDigit . "\n";
