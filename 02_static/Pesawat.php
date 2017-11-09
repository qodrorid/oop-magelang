<?php 

    class Pesawat {

        private static $harga = 100000000;

        public static function type() 
        {
            return 'sukhoi';
        }

        public static function getHarga() 
        {
            return self::$harga;
        }

        public function typeNotStatic()
        {
            return 'typeNotStatic';
        }

    }
?>