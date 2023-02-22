<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlHal, $wktMain, $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0, $tipe=""){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->wktMain = $wktMain;
        $this->tipe = $tipe;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getIngfoLengkap(){
        if($this->tipe=="komik"){
            return "Komik : $this->judul | $this->penulis, $this->penerbit ($this->harga) - $this->jmlHal Halaman.";
        } else {
            return "Game : $this->judul | $this->penulis, $this->penerbit ($this->harga) - $this->wktMain Jam.";
        }
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Mashasi Kisimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Vinland Saga", "Joko Widodo", "Gramedia", 22000, 245, 0, "komik");
$produk3 = new Produk("GTA 5", "Kalpin Batagor", "Xijinping Studio", 265000, 0, 45, "game");

echo $produk1->getIngfoLengkap();
echo "<br>";
echo $produk2->getIngfoLengkap();
echo "<br>";
echo $produk3->getIngfoLengkap();
