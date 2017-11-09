<?php 
    include_once("Xiaomi/Smartphone.php");
    include_once("Asus/Smartphone.php");
    
    //cara pertama
   /*  use Xiaomi\Smartphone as Xiaomi;
    use Asus\Smartphone as Asus;

    $xiaomi = new Xiaomi();
    echo $xiaomi->tampilMerk();

    echo "</br>";

    $asus = new Asus();
    echo $asus->tampilMerk(); */

    // cara kedua
   /*  $xiaomi = new Xiaomi\Smartphone();
    echo $xiaomi->tampilMerk();

    echo "</br>";
    
    $asus = new Asus\Smartphone();
    echo $asus->tampilMerk(); */

    // cara ketiga
    echo (new Xiaomi\Smartphone())->tampilMerk();
    

?>