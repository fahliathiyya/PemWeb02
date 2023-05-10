<?php
class Persegi {
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}
$obj = new Persegi(7);
echo $obj->hitungLuas();