<?php
//$a = ['sapi','kerbau','kuda']
/** 
$a[] = 'sapi';
$a[] = 'ayam';
$a[] = 'kambing';

var_dump($a);
 */
/** 
$datadiri['nama'] = 'lutfi ramadhan';
$datadiri['alamat'] = 'jakarta';
$datadiri['goldarah'] = 'B';
 */

/*
$datadiri = [
'nama' => 'lutfi ramadhan',
'alamat' => 'jakarta',
'goldarah' => 'B'
];
*/

//echo 'Nama = ' . $datadiri['nama'] .'<br>' . 'Alamat = ' . $datadiri['alamat'] .'<br>' . 'Golongan Darah = ' . $datadiri['goldarah'] .'<br>';

$alamat = array(
    "naufal" => "Bandung",
    "meilan" => "Malang",
    "marimar" => "Mexico"
);

foreach ($alamat as $x => $value) {
    echo "Alamat " . $x . "  di " . $value;
    echo "<br>";
}
