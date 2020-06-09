<?php

namespace FUNC;

require 'Atribut.php';
require 'NilaiMinMax.php';

use FUNC\Atribut;
use FUNC\NilaiMinMax;

class Fungsi
{
    public $input = [];
    public $inputDataAlternatif = [];
    public $DataAlternatif = [];
    public $kriteria = [];
    public $dataNormalisasi = [];
    public $nilaiSPK = [];

    public function __construct($input, $kriteria, $DataAlternatif = null)
    {
        $this->input = $input;
        $this->kriteria = $kriteria;
        $this->DataAlternatif = $DataAlternatif;
        $this->_fungsiNormalisasi();
        $this->_fungsiNilaiSPK();
        $this->_fungsiInputdanDataAlternatif();
    }

    private function _fungsiNormalisasi()
    {
        $JumlahKriteria = count($this->kriteria);
        $JumlahInput = count($this->input);
        $kriteria = $this->kriteria;
        $input = $this->input;
        $nilaiMinMax = new NilaiMinMax($this->input, $this->kriteria);
        $atribut = new Atribut($this->kriteria);
        $atribut = $atribut->get();
        $nilaiMinMax = $nilaiMinMax->get();
        $dataNormalisasi = [];

        for ($inputKe = 0; $inputKe < $JumlahInput; $inputKe++) {
            for ($kriteriaKe = 0; $kriteriaKe < $JumlahKriteria; $kriteriaKe++) {
                if ($atribut[$kriteriaKe] == true) {
                    $dataNormalisasi[$inputKe][$kriteriaKe] = $input[$inputKe][$kriteriaKe] / $nilaiMinMax[$kriteriaKe];
                } else if ($atribut[$kriteriaKe] == false) {
                    $dataNormalisasi[$inputKe][$kriteriaKe] = $nilaiMinMax[$kriteriaKe] / $input[$inputKe][$kriteriaKe];
                }
            }
        }

        $this->dataNormalisasi = $dataNormalisasi;
        return $dataNormalisasi;
    }

    private function _fungsiNilaiSPK()
    {
        $HasilNormalisasi = $this->dataNormalisasi;
        $JumlahKriteria = count($this->kriteria);
        $JumlahInput = count($this->input);
        $bobotKriteria = [];
        $Hasil = [];
        $nilaiSPK = [];

        for ($kriteriaKe = 0; $kriteriaKe < $JumlahKriteria; $kriteriaKe++) {
            $bobotKriteria[] = $this->kriteria[$kriteriaKe][1] / 100;
        }

        for ($inputKe = 0; $inputKe < $JumlahInput; $inputKe++) {
            for ($kriteriaHasilAkhir = 0; $kriteriaHasilAkhir < $JumlahKriteria; $kriteriaHasilAkhir++) {
                $Hasil[$inputKe][$kriteriaKe] = $bobotKriteria[$kriteriaHasilAkhir] * $HasilNormalisasi[$inputKe][$kriteriaHasilAkhir];
            }
            $nilaiSPK[] = array_sum($Hasil[$inputKe]);
        }

        $this->nilaiSPK = $nilaiSPK;
    }

    public function getnilaiSPK()
    {
        $this->sort();
        return $this->nilaiSPK;
    }

    private function _fungsiInputdanDataAlternatif()
    {
        $inputDataAlternatif = [];
        for ($inputKe = 0; $inputKe < count($this->input); $inputKe++) {
            $inputDataAlternatif[$this->DataAlternatif[$inputKe]] = $this->nilaiSPK[$inputKe];
        }
        $this->inputDataAlternatif = $inputDataAlternatif;
    }

    public function getInputdanDataAlternatif($index = null)
    {
        if ($this->inputDataAlternatif == null) {
            return 'Maaf, tidak ada nama yang diinputkan';
        } else if (count($this->inputDataAlternatif) != count($this->input)) {
            return 'Maaf, jumlah data tidak sesuai';
        } else {
            if ($index == null) {
                return $this->inputDataAlternatif;
            } else {
                return $this->inputDataAlternatif[$index];
            }
        }
    }

    public function sort()
    {
        rsort($this->nilaiSPK);
        arsort($this->inputDataAlternatif);
    }

    public function getHasil()
    {
        $this->sort();
        return $this->nilaiSPK[0];
    }

    public function getHasildenganDataAlternatif()
    {
        $this->sort();
        return array_key_first($this->inputDataAlternatif);
    }
}
