<?php
$nama="Meilan";
/*
function tulisPesan($nama=null) 
{
  echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
  */
function tulisPesan() 
{
  global $nama; // menggunakan variabel global
  echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
tulisPesan();
?>