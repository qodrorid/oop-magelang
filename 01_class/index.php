<?php 
include_once("IbuKucing.php");
include_once("Kucing.php");

$kucing = new Kucing('Ucup', 'Siti');
$kucing2 = new Kucing('Asep', 'Iteung');


echo "Nama Kucing: ". $kucing->getNamaKucing()."</br>";
echo "Nama Istri:". $kucing->getIstri();

