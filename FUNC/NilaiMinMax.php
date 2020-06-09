<?php

namespace FUNC;

class NilaiMinMax
{
    public $nilaiMinMax = [];

    public function __construct($input, $kriteria)
    {
        $nilaiMinMax = [];
        $inputKriteria = [];

        for ($kriteriaKe = 0; $kriteriaKe < count($kriteria); $kriteriaKe++) {
            for ($inputKe = 0; $inputKe < count($input); $inputKe++) {
                $inputKriteria[$kriteriaKe][] = $input[$inputKe][$kriteriaKe];
            }

            if (end($kriteria[$kriteriaKe]) == true) {
                $nilaiMinMax[] = max($inputKriteria[$kriteriaKe]);
            } else {
                $nilaiMinMax[] = min($inputKriteria[$kriteriaKe]);
            }
        }
        $this->nilaiMinMax = $nilaiMinMax;
    }

    public function get()
    {
        return $this->nilaiMinMax;
    }
}
