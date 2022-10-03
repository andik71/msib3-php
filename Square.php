<?php 
require_once "Shape.php";

class Square extends Shape 
{
    // Inisialiasi Variabel Persegi Panjang
    public $panjang = 0;
    public $lebar = 0;
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    public function namaBidang()
    {
        $namaBidang = "Persegi Panjang";
        echo $namaBidang;
    
    }

    public function luasBidang()
    {
        // L = p x l | Rumus menghitung luas persegi panjang
        $luasBidang = ($this->panjang * $this->lebar);
        echo $luasBidang;
    
    }

    public function kelilingBidang()
    {
        // Keliling = 2 × (p + l)
        $kelilingBidang = 2 * ($this->panjang + $this->lebar);
        echo $kelilingBidang;
    }

    public function keterangan(){
        echo '
            Panjang: '.$this->panjang.' |
            Lebar: '.$this->lebar.'
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
