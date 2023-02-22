<?php
// tidak memiliki implementasi
// murni template untuk childrennya
// tidak boleh memiliki property, hanya deklarasi method

// abstract class Buah {
//     private $warna;

//     abstract public function makan();

//     public function setWarna($warna){
//         $this->warna = $warna;
//     }
// }
interface Buah {
    public function makan();
    public function setWarna($warna);
}

// class Apel extends Buah {
//     public function makan(){
//         // kunyah sampe tengah
//     }
// }
class Apel implements Buah {
    // semua method yang dideklarasikan di interface harus ada di implements, lebih boleh pada implementsnya
    protected $warna;
    public function makan(){
        // kunyah sampe tengah
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

// class Jeruk extends Buah {
//     public function makan(){
//         // kupas lalu kunyah
//     }
// }
class Jeruk implements Buah {
    // semua method yang dideklarasikan di interface harus ada di implements, lebih boleh pada implementsnya
    protected $warna;
    public function makan(){
        // kupas lalu kunyah
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

// semua method harus dideklarasikan dengan visibility public
// boleh deklarasi construct
// satu class boleh mengimplementasi banyak interface
// ex:

class Apel implements Buah, Benda {
    // ...
}

// dapat memaksakan method menerima parameter object

// extends dan implements dapat digunakan sekaligus
