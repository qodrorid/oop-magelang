<?php 
    include_once("Pesawat.php"); 

    $pesawat = new Pesawat();
    echo $pesawat->typeNotStatic();

    echo Pesawat::type();
    echo Pesawat::getHarga();

?>