<?php
function cetakPesan($nama = null){
    if (empty($nama))
        echo 'Selamat Datang!';
    else
        echo "Selamat Datang, $nama";    
}

cetakPesan('Lutfi');
cetakPesan();
?>