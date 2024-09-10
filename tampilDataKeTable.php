<?php
$karyawan=
[
    ['nama'=>'Naufal','alamat'=>'Bandung','jenis_kelamin'=>'Pria'],
    ['nama'=>'Winda','alamat'=>'Surabaya','jenis_kelamin'=>'Wanita'],
    ['nama'=>'Abyasa','alamat'=>'Bandung','jenis_kelamin'=>'Pria']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php foreach ($karyawan as $kar) :?>
        <tr>
            <td><?= $kar['nama'] ?></td>
            <td><?= $kar['alamat']?></td>
            <td><?= $kar['jenis_kelamin']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>