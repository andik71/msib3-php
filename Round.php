<?php 
require_once "Shape.php";

class Round extends Shape 
{
    // Inisialisasi Variable Lingkaran
    public $jari = 0;
    public function __construct($jari)
    {
        $this->jari = $jari;
    }
    public function namaBidang()
    {
        $namaBidang = "Lingkaran";
        echo $namaBidang;
    }
    public function luasBidang()
    {
        // L = π × r × r
        $luasBidang = 3.14 * pow($this->jari, 2);
        echo $luasBidang;
    }
    public function kelilingBidang()
    {
        // K = 2 x π x r atau K = π x d
        $kelilingBidang = 2 * 3.14 * $this->jari;
        echo $kelilingBidang;
    }

    public function keterangan(){
        echo '
            Jari-jari: '.$this->jari.'
        ';

    }

    // public function mencetak(){
    //     echo
    //     '
    //     <tr>
    //         <td>'.$this->namaBidang().'</td>
    //         <td>'.$this->luasBidang().'</td>
    //         <td>'.$this->kelilingBidang().'</td>
    //     </tr>
    //     ';
    // }
}
