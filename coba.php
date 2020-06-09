<?php

require 'FUNC/Fungsi.php';

use FUNC\Fungsi;

$kriteria = [
    [
        [1, 2, 3, 4, 5], 40, false
    ],
    [
        [1, 2, 3, 4, 5], 20, false
    ],
    [
        [1, 2, 3, 4, 5], 40, true
    ]

];
$dataAlternatif = ['Gurame', 'Patin', 'Lele'];
$input = [
    [4, 5, 5],
    [3, 2, 4],
    [4, 1, 2],
];

$spk = new Fungsi($input, $kriteria, $dataAlternatif);
echo $spk->getHasildenganDataAlternatif() . "\n";
echo $spk->getHasil() . "\n";
echo 'Ikan yang tepat adalah ' . $spk->getHasildenganDataAlternatif() . ' dengan nilai ' . //$spk->getnilaiSPK() . "\n";
    print_r($spk->getnilaiSPK());
print_r($spk->getInputdanDataAlternatif());
