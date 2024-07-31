<?php

include("Product.php");

class CDmusik extends Product{
    public $artist;
    public $durasi = 0;
    public $daftarLagu = array();

    public function tambahLagu($lagu){
        if(is_array(($lagu))){
            $this->daftarLagu = array_merge($this->daftarLagu, $lagu);
        }else{
            $this->daftarLagu[] = $lagu;
        }

    }
    public function setDurasi($durasi){
        $this->durasi = $durasi;
    }
    public function setArtist($artist){
        $this->artist = $artist;
    }
}

$cdAndra = new CDmusik("Andra and The Backbone", 40);
$cdAndra->tambahLagu("Main Hati");
$cdAndra->tambahLagu("Hitamku");
$cdAndra->setArtist("Andra");

echo "Artist:  " .$cdAndra->artist;
echo "<br/>Durasi: " . $cdAndra->durasi;
echo "<br> Harga " . $cdAndra->getPrice();
echo "<br/> Lagu: ";
echo "<ol>";
foreach($cdAndra->daftarLagu as $lagu){
    echo "<li>". $lagu."</a>";
}
echo "</ol>";   