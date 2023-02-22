<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Mashasi Kisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Vinland Saga", "Joko Widodo", "Gramedia", 22000);
$produk3 = new Produk("TMNT");

echo "Komiknya " . $produk1->getLabel();
echo "<br>";
echo "Manganya " . $produk2->getLabel();
echo "<br>";
echo "Manganya " . $produk3->getLabel();