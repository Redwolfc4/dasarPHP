<?php
// camel case
//$nama = ucwords('lutfi ramadhan');

//capital
$nama = strtoupper('lutfi ramadhan');

//function 
function hitung($a,  $b) : int {
    return $a + $b;
}
echo hitung(1,'2')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?= $nama ?></h1>
</body>
</html>