<?php 
// membuat array asosiatif
$profileArray = [
    "nama" => "Fahlia Athiyya Marva",
    "kelas" => "SI 14",
];

// print_r($profileArray );

$profileMultiArray = [
    [
    'nama' => 'Siti',
    'kelas' => 'X TKJ 2'
    ],
     [
        'nama' => 'Sri',
        'kelas' => 'X TKJ 5'
    ],
    [
        'nama' => 'Ahmad',
        'kelas' => 'XII RPL 1'
    ]
];

foreach ($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
}