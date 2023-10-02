<?php
require_once 'Abstract.php';
class Lingkaran extends Bentuk2D {
    private $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }

    public function kelilingBidang(){
        $kelilingBidang = 2 * 3.14 * $this->jari2;
        return $kelilingBidang;
    
    }

    public function namaBidang() {
        return "Lingkaran";
    }
    public function keteranganBidang() {
        return "Bentuk bulat dengan jari-jari.";
    }
}
?>