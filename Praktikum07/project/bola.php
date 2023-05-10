<?php
class Bola {
    public $jarijari;

    function __construct($jarijari){
        $this->jarijari = $jarijari;
    }

    function hitungVolume(){
        return $this->jarijari * $this->jarijari * $this->jarijari * 3.14 * 4 / 3;
    }
}

$obj = new Bola(10);
echo $obj->hitungVolume();

