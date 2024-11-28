<?php

echo "\n\n";
echo "=====================\n";
echo "== Tabel Pangkat 2 ==\n";
echo "=====================\n\n";

echo "Masukkan Mau Berapa Angka : ";
$batas = trim(fgets(STDIN));

echo "\n";
echo "Ini Hasilnya\n\n";

for ($i = 1; $i <= $batas; $i++) {
    echo "$i\t" . ($i * $i) . "\t" . ($i * $i * $i) . "\n";
}

?>