<?php

class Produk {
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Vinland Saga";
$produk4->penulis = "Joko Widodo";
$produk4->penerbit = "Gramedia";
$produk4->harga = 22000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo "Komiknya " . $produk3->getLabel();


echo "<br>";
echo "Manganya " . $produk4->getLabel();