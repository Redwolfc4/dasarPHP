<?php
$karyawan = [
    ['nama' => 'Toni', 'alamat' => 'Bandung'],
    ['nama' => 'Naufal', 'alamat' => 'Bandung'],
    ['nama' => 'Davi', 'alamat' => 'Jakarta']
];
//ubah ke serialized
$data = serialize($karyawan);
$file = 'karyawan.txt';
file_put_contents($file, $data);
echo $output = file_get_contents($file);

// ubah kembali ke array
$data = unserialize($output);
print_r($data);

//ubah ke json
$data = json_encode($karyawan);
$file = 'karyawan2.txt';
file_put_contents($file, $data);
$output = file_get_contents($file);
echo $output. '<br>';

// ubah kembali ke array
$data = json_decode($output,true, $flags = 1);
echo 'apa nih';
print_r($data);
?>