<?php

namespace FUNC;

class Atribut
{
    public $atribut = [];

    public function __construct($kriteria)
    {
        $this->kriteria = $kriteria;
        $JumlahKriteria = count($this->kriteria);
        $atribut = [];

        for ($inputKriteria = 0; $inputKriteria < $JumlahKriteria; $inputKriteria++) {
            $atribut[] = end($this->kriteria[$inputKriteria]);
        }
        $this->atribut = $atribut;
    }
    public function get()
    {
        return $this->atribut;
    }
}
