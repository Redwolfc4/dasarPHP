<?php
//$nama = 'Tini Sans'
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <form action="./tampilForm" method="get">
        <input type="text" name="nama" id="nama">
        <input type="text" name="alamat" id="alamat">
        <input type="submit" value="Kirim">
    </form>
</body>
</html>