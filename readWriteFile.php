<?php
$message = ucwords('Apa Kabar Haryanto?\n');
$file = 'content.txt';
file_put_contents($file, $message, FILE_APPEND);
echo file_get_contents($file);
?>