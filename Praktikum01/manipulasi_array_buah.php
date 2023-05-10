<?php
$arrayBuah = ["Mangga", "Stroberi", "Nanas", "Apel", "Durian"];

sort($arrayBuah); //untuk mengurutkan data dari a-z
array_pop($arrayBuah); //untuk menghapus value yang paling belakang
unset($arrayBuah [3] ); //menghapus spesifik value pada array
array_push($arrayBuah, "Kecapi"); //menambah value di index terakhir
array_shift($arrayBuah); //menghapus value yang paling depan 
array_unshift($arrayBuah, "buah naga"); //menambah value di index pertama

$arrayBuah [2] = "pisang"; //mengubah value tertentu

foreach($arrayBuah as $buah) {
    echo $buah. "<br>";
}

?>