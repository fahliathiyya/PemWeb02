<?php
class BMI {
    public $beratBadan, $tinggiBadan;

    public function hitungBMI()
    {
        return $this->beratBadan/($this->tinggiBadan * $this->tinggiBadan);
    }

    public function cekStatusBB()
    {
        if($this->hitungBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }
        elseif($this->hitungBMI() >= 18.5 && $this->hitungBMI() <= 24.9){
            return "normal";
        }
        elseif($this->hitungBMI() >= 25 && $this->hitungBMI() <= 29){
            return "kelebihan berat badan";
        }
        elseif($this->hitungBMI() >= 30){
            return "obesitas";
        }
    }
}

$objBMI = new BMI;
$objBMI->beratBadan = 62;
$objBMI->tinggiBadan = 1.7;
echo round($objBMI->hitungBMI()) ;
echo "<br>";
echo $objBMI->cekStatusBB();
?>