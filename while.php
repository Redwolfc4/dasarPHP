<?php 
$x=1;
while ($x <= 15) 
{
    echo "while Nomor Antrian yang tersedia: $x <br>";
    $x++;
} 

$arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];
$jumlah	=0;
$i		=0;
while($i<=11)
{
    if($arr_warna[$i]=='merah')
    {
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna merah, $jumlah <br>";

$x=1;
do
{
    echo "Do while Nomor Antrian yang tersedia: $x <br>";
    $x++;
}
while ($x <= 15);
?>