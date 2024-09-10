<?php
$karnivora    = ['singa', 'macan', 'serigala'];
$herbivora    = ['kuda', 'sapi', 'kambing'];
$omnivora    = ['ayam', 'monyet', 'babi'];
$binatang    = ['karnivora' => $karnivora, '$herbivora' => $herbivora, '$omnivora' => $omnivora];
print_r($binatang['karnivora']) . "\n";

$mahasiswa = array(
    array("Marimar", 20, "Wanita"),
    array("Soledad", 25, "Wanita"),
    array("Alfonso", 30, "Pria")
);

for ($baris = 0; $baris < count($mahasiswa); $baris++) {
    echo "<p><b>Baris No: $baris</b></p>";
    echo "<ul>";
    for ($kolom = 0; $kolom < count($mahasiswa[$baris]); $kolom++) {
        echo "<li>" . $mahasiswa[$baris][$kolom] . "</li>";
    }
    echo "</ul>";
}

