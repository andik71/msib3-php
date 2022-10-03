<?php
require_once "Shape.php";

class Triangle extends Shape
{
    // Inisialisasi Variabel Segitiga
    public $alas = 0;
    public $tinggi = 0;
    public $sisi = 0;
    public function __construct($alas, $tinggi, $sisi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    public function namaBidang()
    {
        $namaBidang = "Segitiga";
        echo $namaBidang;
    }

    public function luasBidang()
    {
        // L = 1/2 x alas x tinggi
        $luasBidang = 0.5 * $this->alas * $this->tinggi;
        echo $luasBidang;
    }

    public function kelilingBidang()
    {
        // K = sisi + sisi + sisi
        $kelilingBidang = $this->sisi + $this->sisi + $this->sisi;
        echo $kelilingBidang;
    }

    public function keterangan(){
        echo '
            Alas: '.$this->alas.' |
            Tinggi: '.$this->tinggi.' |
            Sisi: '.$this->sisi.'
        ';

    }

    // public function mencetak()
    // {
    //     echo
    //     '
    //     <tr>
    //         <td>'.$this->namaBidang().'</td>
    //         <td>'.$this->keterangan().' </td>
    //         <td>'.$this->luasBidang().'</td>
    //         <td>'.$this->kelilingBidang().'</td>
    //     </tr>
    //     ';
    // }
}
