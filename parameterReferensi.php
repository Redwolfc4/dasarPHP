<?php

//parameter referensi
function gantiNama(&$nama)
{
    $nama="Indah";
}
$nama="Risa";
gantiNama($nama); //ubah variabel nama global
echo $nama .'<br/>';

function kalilipat(&$x) {
    $x = $x**2;
}
$x = 2;
echo $x;
kalilipat($x);
echo $x;
kalilipat($x);
echo $x;
kalilipat($x);
echo $x;
?>