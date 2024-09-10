<?php
$nama = 'Lutfi Ramadhan';
$alamat = 'Jakarta';
$gol_darah = 'B';

echo $nama . '<br>' . $alamat .'<br>'. $gol_darah 
?>

<html>

<body>
    <h1>Selamat Datang, <?= $nama ?></h1>
    <h2>Alamat : <?= $alamat ?></h2>
    <h2>Golongan Darah : <?= $gol_darah ?></h2>
</body>

</html>