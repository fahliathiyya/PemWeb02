<?php
function hitungUmur($tahunLahir) {
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(2002);
echo "<br>";
hitungUmur(2003);
echo "<br>";


function welcome($nama = "fahlia")
{
    echo "hello, selamat datang $nama !";
}

welcome("abil");
echo "<br>";
welcome("budi");
?>