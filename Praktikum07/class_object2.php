<?php
class Buah {
    public $warna = "Oranye";
    public $nama = "Jeruk";
    public $rasa = "Kecut";

    function tumbuh (){
        return "$this->nama itu bisa tumbuh";
    }

    function busuk(){
        return "$this->nama itu bisa busuk";
    }
}

$objBuah = new Buah();
$objBuah->nama = "Semangka";
$objBuah->warna = "Hijau";
$objBuah->rasa = "Manis";
echo $objBuah->tumbuh();
echo "<br>";
echo $objBuah->busuk()

?>