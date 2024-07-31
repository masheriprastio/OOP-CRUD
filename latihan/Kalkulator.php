<?php

class Kalkulator{
    public $judul = "Kalkulator Pemrograman OOP PHP";
    public $nilaiSatu = 0;
    public $nilaiDua = 0;

    public function __construct($nilaiPertama, $nilaiKedua){
        $this->nilaiSatu = $nilaiPertama;
        $this->nilaiDua= $nilaiKedua;

    }
    public function getAngkaSatu(){
        echo "<br/>";
        return $this->nilaiSatu;

    }
    public function getAngkaDua(){
        return $this->nilaiDua;
    }
    public function tambah(){
        return $this->nilaiSatu + $this->nilaiDua;
    }

}
echo "Penjumlahan";
$kalkulator = new Kalkulator(2,2);
echo "Angka 1= ".
$kalkulator->getAngkaSatu();
echo " Angka 2= " .
$kalkulator->getAngkaDua();
echo " Hasil Penjumlahan " .
$kalkulator->tambah();