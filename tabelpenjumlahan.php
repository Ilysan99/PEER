<?php

echo "=======================\n";
echo "== Tabel Penjumlahan ==\n";
echo "=======================\n\n";


echo "Masukkan angka maksimum untuk tabel penjumlahan: ";
$max = (int)fgets(STDIN); 


echo str_pad("+", 4);
for ($i = 1; $i <= $max; $i++) {
    echo str_pad($i, 4);
}
echo PHP_EOL;


for ($i = 1; $i <= $max; $i++) {
    echo str_pad($i, 4); 
    for ($j = 1; $j <= $max; $j++) {
        echo str_pad($i + $j, 4); 
    }
    echo PHP_EOL; 
}
?>