<?php
// Class abstrak tidak dapat diinstance, yang diinstance childnya
// Mendefinisikan interface untuk childnya
// Berperan sebagai kerangka dasar childrennya
// Memiliki minimal 1 method abstrak yang hanya interface tanpa isi, isinya di childrennya

abstract class Buah {
    private $warna;

    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }
}

class Apel extends Buah {
    public function makan(){
        // kunyah sampe tengah
    }
}

class Jeruk extends Buah {
    public function makan(){
        // kupas lalu kunyah
    }
}