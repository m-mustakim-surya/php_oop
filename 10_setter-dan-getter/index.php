<?php

class Produk {
    public $judul, $penulis, $penerbit;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;        
    }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getIngfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    // ini adalah bentuk setter
    public function setHarga($harga){
        $this->harga = $harga;
    }

    // ini adalah bentuk getter
    public function getHarga(){
        return $this->harga;
    }

    // magic method setter & getter
    // __set() & __get()
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHal;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHal = $jmlHal;
    }
    
    
    public function getIngfoLengkap(){
        $str = "Komik : " . parent::getIngfoProduk() . " - {$this->jmlHal} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $wktMain;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getIngfoLengkap(){
        $str = "Game : " . parent::getIngfoProduk() . " - {$this->wktMain} Jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Mashasi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Komik("Vinland Saga", "Joko Widodo", "Gramedia", 22000, 245);
$produk3 = new Game("GTA 5", "Kalpin Batagor", "Xijinping Studio", 265000, 45);

echo $produk1->getIngfoLengkap();
echo "<br>";
echo $produk2->getIngfoLengkap();
echo "<br>";
echo $produk3->getIngfoLengkap();
echo "<br>";
echo $produk3->getHarga();
echo "<hr>";

$produk1->setHarga(6969);
echo $produk1->getHarga();