<?php

echo "\n\n";
echo "=====================\n";
echo "== Tabel Perkalian ==\n";
echo "=====================\n\n";

function tableDinamis(int $number): array {
    $table = [];

    for ($i = 1; $i <= 50; $i++) {
        $table[$i] = $number * $i;
    }

    return $table;
}

function displayTableDinamis(int $number): void {
    $dinamisTable = tableDinamis($number);
    echo str_pad("Tabel Perkalian untuk angka $number:", 40, " ", STR_PAD_BOTH) . "\n";
    echo str_repeat("-", 40) . "\n";

   
    echo str_pad("x", 4);
    for ($i = 1; $i <= 50; $i++) {
        echo str_pad($i, 4);
    }
    echo PHP_EOL;

    echo str_pad($number, 4);
    foreach ($dinamisTable as $i => $result) {
        echo str_pad($result, 4);
    }
    echo PHP_EOL;
}

 #INPUT DARI PEMBUKA
echo "Masukkan angka untuk tabel perkalian: ";
$handle = fopen("php://stdin", "r");
$input = fgets($handle);

if (is_numeric(trim($input))) {
    $number = (int)trim($input);
    displayTableDinamis($number);
} else {
    echo "Silakan masukkan angka yang valid.\n";
}
?>