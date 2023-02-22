<?php
// tidak bisa disimpan ke dalam class
define('NAMA', 'Rudi Kopling');
echo NAMA;

// bisa disimpan ke dalam kelas
const BRO = "Anzae";
echo BRO;

class Coba {
    const TIPE = 'Maju';
}

echo Coba::TIPE;

// Ada juga magic constant yang dibuatkan dari php
// ex: __LINE__, __FILE__, etc.

