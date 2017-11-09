<?php
// 1. nama file harus huruf besar awalnya
// 2. nama file harus sama dengan nama classnya
class Kucing extends IbuKucing {

     // public = Bisa diakses oleh siapa saja
    // protected = Hanya bisa diakses oleh class itu
    //             sama class anaknya
    // private = hanya bisa diakses oleh kelas itu sendiri

    private $istriKucing;
    
    private $namaKucing;
        
    //constructor = method yg pertama kali bakal di panggil
    // setiap kali membuat object baru
    public function __construct($nama, $istri)
    {
       $this->namaKucing = $nama; 
       $this->istriKucing = $istri;
    }       

    public function makan()
    {
        return 'makan';
    }

    public function getAyahKucing()
    {
        return $this->ayah;
    }

    public function getIstri() 
    {
        return $this->istriKucing;
    }

    public function getNamaKucing() 
    {
        return $this->namaKucing;
    }

}  