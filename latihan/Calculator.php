<?php

class Calculator{
    private $angkaSatu;
    private $angkaDua;

    public function __construct($angka1,$angka2){
        $this->angkaSatu = $angka1;
        $this->angkaDua = $angka2;
    }
    public function getAngkaSatu(){
        return $this->angkaSatu;

    }
    public function getAngkaDua(){
        return $this->angkaDua;
    }
    public function tambah(){
        return $this->angkaSatu + $this->angkaDua;
    }

}

$kalkulator = new Calculator(10,5);
echo "Angka 1:". $kalkulator->getAngkaSatu() . "<br>";
echo "Angka 2: " . $kalkulator->getAngkaDua() . "<br>";
echo "Hasil: " . $kalkulator->tambah() . "<br>";