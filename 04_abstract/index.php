<?php 
include_once("Smartphone.php");
include_once("Nokia.php");


$nokia = new Nokia();
echo $nokia->ram();
echo $nokia->os();