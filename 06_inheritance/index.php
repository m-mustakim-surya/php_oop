<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlHal, $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHal = $jmlHal;
        $this->wktMain = $wktMain;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getIngfoLengkap(){
        return "Komik : $this->judul | $this->penulis, $this->penerbit ($this->harga) - $this->jmlHal Halaman.";
    }
}

class Game extends Produk {
    public function getIngfoLengkap(){
        return "Game : $this->judul | $this->penulis, $this->penerbit ($this->harga) - $this->wktMain Jam.";
    }
}

$produk1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Komik("Vinland Saga", "Joko Widodo", "Gramedia", 22000, 245, 0);
$produk3 = new Game("GTA 5", "Kalpin Batagor", "Xijinping Studio", 265000, 0, 45);

echo $produk1->getIngfoLengkap();
echo "<br>";
echo $produk2->getIngfoLengkap();
echo "<br>";
echo $produk3->getIngfoLengkap();
